function isValidNumber(str) 
{
  let num = Math.floor(Number(str))
  return (String(num) === str) && (num >= 0)
}

document.querySelector('form').addEventListener('submit', event => 
{
    let email = document.querySelector('input[name="email"]').value
    let password = document.querySelector('input[name="password"]').value
    let product1 = document.querySelector('input[name="product1"]').value
    let product2 = document.querySelector('input[name="product2"]').value
    let product3 = document.querySelector('input[name="product3"]').value

    if(!(/\S+@\S+\.\S+/.test(email)))
    {
        alert("Not a valid email \n (name@domain.com)")
        event.preventDefault()
    }

    else if (!password || 0 === password.length) 
    {
        alert("Enter a valid password")
        event.preventDefault()
    }

    else if(!isValidNumber(product1) || !isValidNumber(product2) || !isValidNumber(product3) ) 
    {
        alert("Products can be 0 or greater")
        event.preventDefault()
    }
})

document.querySelector(".reset-button").addEventListener('click', reset =>
{
  location.reload()
})