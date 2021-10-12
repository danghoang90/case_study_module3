$(document).ready(function () {
    let origin = location.origin;
    $('.delete-food').click(function () {
        if (confirm('Bạn chắc chắn muốn xóa?')) {
            let idFood = $(this).attr('data-id');
            $.ajax({
                url: origin + '/foods/' + idFood + '/destroy',
                method: 'GET',
                dataType: 'json',
                success: function (res) {
                    alert(res);
                    $('#food-' + idFood).remove();
                },
                error: function (error) {
                }
            })
        }
    })
    $('#search-food').keyup(function () {
        let value = $(this).val();
        if (value) {
            $.ajax({
                url: origin + '/home/search-food/',
                method: 'GET',
                data: {
                    keyword: value
                },
                success: function (res) {
                    let html = '';
                    res.forEach(function (item, index) {
                        html += '<button data-id="' + item.id + ' " class="list-group-item list-group-item-action food-item">';
                        html += item.name;
                        html += '</button>';
                    })
                    $('#list-food-search').html(html);
                    console.log(res);
                },
                error: function (error) {
                    console.log(error);
                }
            })
        } else {
            $('#list-food-search').html('');
        }
    })
    $('body').on('click', '.food-item', function () {
        let idFoodClicked = $(this).attr('data-id');
        $.ajax({
            url: origin + '/home/find-food/' + idFoodClicked,
            method: 'GET',
            success: function (res) {
                $('.food-list').hide();
                $('.pagination').hide();
                let html = '<div class="col-md-3" data-aos="slide-up">'
                html += '<div class="card">'
                html += '<div class="card-header btn" data-toggle="collapse" data-target="#noidungcard1" aria-expanded="true"' +
                    'data-parent="#myaccordion">'
                html += res.name
                html += '</div>'
                html += '<div class="card-body collapse show" data-toggle="collapse" aria-expanded="false">'
                html += '<img width="100%" src="http://127.0.0.1:8000/storage/' + res.image + '">'
                html += '</div>'
                html += '</div>'
                html += '</div>'
                $('#food-item').html(html);
                $('#list-food-search').html('');
            }
        })
    });
    let getUrlParameter = function getUrlParameter(sParam) {
        let sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
        return false;
    };

    if(getUrlParameter('page')){
        window.location.hash = "#List";
        // $('html, body').animate({
        //     scrollTop: $("#List").offset().top
        // }, 1000, function(){
        //
        //     // Add hash (#) to URL when done scrolling (default click behavior)
        //     window.location.hash = "#List";
        // });
    }
})
