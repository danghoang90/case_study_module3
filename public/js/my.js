$(document).ready(function () {
    let origin = location.origin;
    $('.delete-food').click(function () {
        console.log(1);
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
})
