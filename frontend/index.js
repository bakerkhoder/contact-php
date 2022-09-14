const send=document.querySelector(".send-button")
send.addEventListener("click",()=>{
console.log("test")
const name=document.querySelector("#name").value
const email=document.querySelector("#email").value
const number=document.querySelector("#number").value
const message=document.querySelector("textarea").value



function addcontacts(name,email,number,message){
  fetch(`http://localhost/start-bootstrap/addcontact.php`,{
    method:'POST',
    body:new URLSearchParams({"name":name},{"email":email},{"number":number},{"message":message}),
  }).then(response =>{response.json()
  console.log(response)})
  .then(data=>console.log(data))
}
addcontacts(name,email,number,message)

})