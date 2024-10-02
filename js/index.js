emailjs.init("99F_N_yJTLAmE21wu")

document.querySelector("#form").addEventListener("submit", (event)=>{
    event.preventDefault()

    emailjs.send("service_bqtqjk7","template_nsdxgfw",{
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        dishes: document.getElementById("dish").value,
        quantity: document.getElementById("quantity").value,
    })
    .then(()=>{
        console.log("message sents")
        alert("your message sent succeefully");
    })
    .catch(()=>{
        console.log("error msg not sent")
    })
})