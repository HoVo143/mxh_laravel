
function myFunction() {

    const input = document.getElementById("myInput");

    const filter = input.value.toUpperCase();

    const myUL = document.getElementById("myUL");

    const li = myUL.getElementsByTagName("li");

    for (i = 0; i < li.length; i++) 
    {
        const a = li[i].getElementsByTagName("a")[0];
        const txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) 
        {
            li[i].style.display = "";
        } 
        else 
        {
            li[i].style.display = "none";
        }
    }
}