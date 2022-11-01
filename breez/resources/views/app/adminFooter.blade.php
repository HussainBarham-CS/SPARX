</div>


</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>







let list = document.querySelectorAll('.navigation li');
function activLink(){
list.forEach((item)=>
item.classList.remove('hovered'));
this.classList.add('hovered');
}
list.forEach((item)=>
item.addEventListener('mouseover',activLink));
</script>
</body>
</html>
