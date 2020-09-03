




    <footer>

</footer>






<script>
    const menu = document.querySelector('.hamburger');
    const navheight = document.querySelector('nav');
    const navbar = document.getElementsByClassName('links');
menu.addEventListener('click',()=>{
menu.classList.toggle("change");
navheight.classList.toggle("navbar");
navbar[0].classList.toggle("listItem");
});
</script>
<!-- <script src="css-js/main.js"></script> -->
</body>
</html>