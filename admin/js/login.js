$(document).ready(function(){
            $('#btnSubmit').click(function(){
            var user = $('input[name="txtUserName"]').val();
            var pass = $('input[name="txtPwd"]').val();
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
                document.getElementById('requestLogin').submit();
            }
            });            
        });