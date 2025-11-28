function sendmail(){
    let parms = {
        name: document.getElementById("name").ariaValueMax,
        email: document.getElementById("email").ariaValueMax,
        subject: document.getElementById("subject").ariaValueMax,
        message: document.getElementById("message").ariaValueMax,
    }
    emailjs.send("service_5as34u6","template_lwedpsg",parms).then(alert("Email Sent!"))
}