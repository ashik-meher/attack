let chatBody = document.getElementById('chat-body');


//chatBody.innerHTML = 'HI THere';

function callIt(){
    //chatBody.innerHTML = 'called it';
    //chatBody.innerHTML = '';
    //console.log('OK');

    
  let id = $('#recepient_id').val();





    $.ajax({
       
        url: './../users/ajaxMessageCall.php',
        method: 'GET',
        data: {
            id:id,
        },
        success: function(data){
            //console.log(data);

            $('#chat-body').html(data);
            //console.log(data);


        }

    })
}

function clearIt(){
    chatBody.innerHTML = '';
    //chatBody.innerHTML = '';
    //console.log('GH');
}

$(document).ready(function(){
    console.log('Hmm');
    //$('#chat-body').html('Hissn');
    setInterval(callIt, 1000);
    //setInterval(clearIt, 3000);



    


})

//callIt();

//setInterval(callIt, 5000);
//setInterval(clearIt, 3000);