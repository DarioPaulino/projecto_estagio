@extends('site.layout.app')

@section('content')

<div class="row">
    <div class="col-12" id="carrossel">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
             <div class="carousel-inner">
               <div class="carousel-item active" >
                 <img src="{{asset('site/img/ft1.png')}}" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item">
                 <img src="{{asset('site/img/ft2.png')}}" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item">
                 <img src="{{asset('site/img/ft3.png')}}" class="d-block w-100" alt="...">
               </div>
             </div>
             <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
             </button>
             <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
             </button>
       </div>
    </div>
</div>

<!--________________________INTRODUÇÃO_________________________-->
<div class="container-fluid" id="introducao">
<div class="container">
<div class="row" >
   <div class="col-lg-8" id="intro1">
       <h2>BEM-VINDO AO CENTRO DE FORMAÇÃO #######</h2>
       <p>
           A #####  é uma empresa de prestação de serviços virada no ramo de formação e Capacitação de pessoas. Fornecendo assistencia, consultoria e acompanhamento personalizado pra ti, Temos os melhores cursos e estagio de modo a capacitar os clientes para os desafios do mercado de trabalho.Tudo que você precisa para manter-se sempre conectado e atualizado encontras aqui no Centro de Formação #########
       </p>
   </div>
   <div class="col-lg-4 align-center">
       <img src="{{asset('site/img/IMG_9608.PNG')}}" class="img_intro"></
   </div>
</div>
</div>
</div>

<!--__________________________2PARTE_____________________-->
<div class="container-fluid" id="part2">
<div class="container">
<div class="row">
<div class="col-sm-12">
   <h1>######</h1>
</div>
 <div class="col-md-4">
     <!--CARD1-->
   <div class="card text-center">
       <div class="card-header">
           <h3>Titulo</h3>
       </div>
       <img src="{{asset('site/img/IMG_9610.png')}}" class="card-img-top" alt="...">
         <div class="card-body">
           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
         </div>
   </div>
 </div>

 <!--CARD2-->
 <div class="col-md-4">
   <div class="card text-center">
       <div class="card-header">
           <h3>Titulo</h3>
       </div>
       <img src="{{asset('site/img/IMG_9610.png')}}" class="card-img-top" alt="...">
         <div class="card-body">
           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
         </div>
   </div>
 </div>
 <!--CARD3-->
 <div class="col-md-4">
   <div class="card text-center">
       <div class="card-header">
           <h3>Titulo</h3>
       </div>
       <img src="{{asset('site/img/IMG_9610.png')}}" class="card-img-top" alt="...">
         <div class="card-body">
           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
         </div>
   </div>
 </div>
</div>
   
</div>
</div>	
</div>	
<!--__________________________3PARTE_____________________-->	
<!--___________________________MISSÃO______________________________-->
<div class="row" id="missao">
   
           <div class="col-sm-12">
               <h2>Missão</h2>
               <p>Ser a principal empresa de tecnologia e consultoria do país,
               com o foco em serviços nas áreas de recuros tecnologicos e desenvolvimento internacional.</p>

               <h2>Nosso Propósito</h2>
               <p>Melhorar a qualidade de vida das pessoas ao mesmo tempo 
               gerar valor aos clientes, colaboradores, investidores e parceiros</p>
           </div>
</div>
<!--__________________________2PARTE_____________________-->
<div class="container-fluid" id="part2">
<div class="container">
<div class="row">
<div class="col-md-12">
   <h1>Noticias</h1>
</div>
                 <!--CARD1-->

 <div class="col-md-4">
         <div class="card">
             <img src="..." class="card-img-top" alt="...">
             <div class="card-body">
                   <p class="card-text">Some quick example text to 
                   build on the card title and make up the
                    bulk of the card's content.</p>
             </div>
       </div>

 </div>

 <!--CARD2-->
 <div class="col-md-4">
         <div class="card">
             <img src="..." class="card-img-top" alt="...">
             <div class="card-body">
                   <p class="card-text">Some quick example text to 
                   build on the card title and make up the
                    bulk of the card's content.</p>
             </div>
       </div>
 </div>

 <!--CARD3-->
 <div class="col-md-4">
         <div class="card">
             <img src="..." class="card-img-top" alt="...">
             <div class="card-body">
                   <p class="card-text">Some quick example text to 
                   build on the card title and make up the
                    bulk of the card's content.</p>
             </div>
       </div>			    
 </div>
   
</div>
</div>	
</div>
    
@endsection