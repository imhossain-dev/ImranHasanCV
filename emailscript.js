function sendmail(){
        let parms = {
            name: document.getElementById("name").value,
            email: document.getElementById("email").value,
            subject: document.getElementById("subject").value,
            message: document.getElementById("message").value
        };

        emailjs.send("service_5as34u6", "template_lwedpsg", parms)
        .then(function(response){
            alert("Email Sent!");
        })
        .catch(function(error){
            alert("Failed to send email!");
            console.log(error);
        });
    }
