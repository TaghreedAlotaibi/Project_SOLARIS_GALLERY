function sendMail(){
    var params = {
        from_name : document.getElementById("name").value,
        email_id : document.getElementById("email_id").value,
        message : document.getElementById("message").value
    }
    emailjs.send("service_ho9a5i5","template_oopjv2s",params).then(function(res){
        alert("succes" + res.status);
    })
}