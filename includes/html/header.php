<style>
    /***********     start header        **********/
/***      curve line ****/
.container{
    overflow-x: hidden;
}

header::before{
    content:'';
    position:absolute;
    z-index: -1;
    bottom:25%;
    left:50%;
    width:50%;
    height:50%;
    background-color:var(--second-color);
    border-radius:50%;
    transition:all .7s linear;
    transform-origin: bottom;
    transform:translateX(-50%) scale(4);
}
header{
    background-color: transparent;
    width:100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-top: 80px;
    color:var(--third-color);
    text-align:center;
    overflow: hidden;
}
header .btn_1{
    width: 100px;
    height: 60xp;
    margin: 70px 0 ;
    padding: 15px;
}

@media only screen and (max-width: 600px) {
    header::before{
        bottom: 30%;
        height: 25%;
    }

}
</style>
<div class="container">
<header>
    
    <h1>Cvmodo the best, faste and modern</h1>
    <p>the quality of you cv increase your chance in the marketplace </p>
    <button class="btn_1" type="submit">Start now</button>
   
</header>
</div>