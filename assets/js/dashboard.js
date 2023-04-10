/*jQuery(document).ready(function ($){
    alert('dashboard js');
});*/
jQuery(document).ready(function ($){
    $('#register').on('submit',function (e) {
        e.preventDefault();
        let user_name = $('#user_name').val();
        let user_family = $('#user_family').val();
        $.ajax({
            url:'/doondook-new-1/wp-admin/admin-ajax.php',
            type : 'post',
            data :{
                action:'add_user',
                user_name:user_name,
                user_family: user_family
            },
            success:function (response){}
        })
    })
    $('#registers').on('submit',function (e) {
        e.preventDefault();
        let user_names = $('#user_names').val();
        let user_familys = $('#user_familys').val();
        $.ajax({
            url:'/doondook-new-1/wp-admin/admin-ajax.php',
            type : 'post',
            data :{
                action:'transaction_user',
                user_names:user_names,
                user_familys:user_familys
            },
            success:function (response){}
        })
    })
});



