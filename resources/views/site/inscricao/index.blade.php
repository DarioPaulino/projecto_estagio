@extends('site.layout.app')

@section('content')

<div class="container-fluid" >
	<div class="row" id="inscricao">
		<div class="col-md-5" id="inscricao_esquerdo">
			<div class="texto_inscricao">
				<h1>Inscrição no conforto de sua casa</h1>
				<p>Faça a inscrição sem mesmo sair de casa, insira os seus dados 
				e Reserve uma vaga par ti. Temos os melhores cursos disponiveis, e ao 
			melhor preço do mercado.</p>
			</div>
			
		</div>

		<div class="col-md-7" id="inscricao_direito">

			<div class="form_inscricao">
				<!--________________formulario________________-->
				<h4 class="text-center">Preencha o formulario</h4>
				<form action="{{route('inscricao.store')}}" method="post">
          @csrf
          <div class="form-row">
            <div class="form-group mt-2">
              <label for="nome">Nome Completo</label>
              <input type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{old('nome')}}" required autofocus>
              <!-- Mostrar o erro da validacao nome-->
                  @error('nome')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                  @enderror
            </div>
  
            <div class="form-group col-md-6 mt-3">
              <label for="numerobi">Numero BI</label>
              <input type="text" class="form-control @error('numero_bi') is-invalid @enderror" name="numero_bi" {{old('numero_bi')}} placeholder="">
           <!-- Mostrar o erro da validacao bi-->
                 @error('numero_bi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                 @enderror
            </div>
          </div>
  
          <div class="form-group col-md-6 mt-3">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control @error('telefone') is-invalid @enderror" name="telefone" placeholder="">
            <!-- Mostrar o erro da validacao telefone-->
                  @error('telefone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                  @enderror
          </div>
          <div class="form-group col-md-6 mt-3">
            <label for="localizacao">Localizacao</label>
            <input type="text" class="form-control @error('localizacao') is-invalid @enderror" name="localizacao" placeholder="">
            <!-- Mostrar o erro da validacao localizacao-->
               @error('localizacao')
                   <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                   </span>
               @enderror
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="curso">Curso</label>
              <select name="curso" class="form-control @error('curso') is-invalid @enderror">
                <option value="" selected>............</option>
                @foreach ($cursos as $curso)
                     <option value="{{$curso->id}}">{{$curso->nome}}</option>
                @endforeach
                
              </select>
              <!-- Mostrar o erro da validacao curso-->
              @error('curso')
              <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
              </span>
          @enderror
            </div>
            
          </div>
          <input type="text" name="foto" value="default.png" hidden>
          <input type="text" name="estado" value="0" hidden>
          
          <button type="submit" class="btn btn-primary mt-3">Inscrever-se</button>
        </form>
			</div>
		</div>

	</div>
</div>
    
@endsection

