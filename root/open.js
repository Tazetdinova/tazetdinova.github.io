let openModal = document.querySelector('.open'),
    modal = document.querySelector('.modal'),
    CloseModal = document.querySelector('.CloseModal'),
    acc = document.querySelectorAll('.zagolovok'), 
    i;


CloseModal.addEventListener('click', function(){
    modal.style.display ='none';
});
    
setTimeout(function() {
    modal.style.display ="block";

},2*1000);

for (i=0; i<acc.length; i++){
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
    }
}
