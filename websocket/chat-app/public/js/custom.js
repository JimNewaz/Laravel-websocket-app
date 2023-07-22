$(document).ready(function(){
    $('#user-list').click(function(){
        $('#heading1').hide();
        $('.list-unstyled').show();
        console.log("asd");
    });
});

Echo.join('status-update')
.here(()=>{
    console.log(users);
})
.joining(()=>{

})
.leaving(()=>{

})
.listen('UserStatusEvent',()=>{

});