$(document).ready(function(){
    $('#btnSignin').click(function(){
    var user = $('input[name="txtUsersName"]').val();
    var pass = $('input[name="pwd"]').val();
    var f1 = true;
    $('#mesUser').text('');
    $('#mesPass').text('');
    if(user == ''){
        $('#mesUser').text('Not null!');
        f1 = false;
    }
    if(pass==''){
        $('#mesPass').text('Not null!');
        f1 = false;
    }
    return f1;
    if(f1==true){
        document.getElementById('frmSign').submit();
    }
    }); 
    
});