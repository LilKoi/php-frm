// document.getElementById("category-photo").addEventListener("change",e =>{
//     console.log(1)
//     if(e.src == "") {
//         e.style.display = "none";
//     } else {
//         e.style.display = "block";
//     }
// }) 

function readURL(input) {
    if (input.files && input.files[0]) {
            var reader = new FileReader();
            let category = document.getElementById("photo");
            console.log(123)
            reader.onload = function (e) {
                category.src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
}