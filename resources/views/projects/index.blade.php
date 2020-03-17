@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/projects/create"><i class="fas fa-plus-circle"></i></a>
            
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        @forelse($projects as $project)
        <div class="col-lg-4 col-sm-12 col-xs-12 ">
            <div class="conteudo">
             
                <div class="conteudo-overlay"></div>
                <img class="img-fluid" src="{{ $project->thumbnail }}" alt=""></img>
                <div class="project-details fadeIn-bottom">
                  <i class="shape">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" version="1.1" id="Camada_1" x="0px" y="0px" viewBox="0 0 600 500" style="enableBackground: new 0 0 600 500" xmlSpace="preserve">
                      <style type="text/css">
                        .portfolio-svg{fill:#D85D5D;}
                      </style>
                      <path id="Caminho_8" class="portfolio-svg" d="M600,500V152L0,361.7V500H600z"></path>
                    </svg>
                  </i>
                  <h3 class="project-title">{{ $project->title }}</h3>
                  <a class="project-subtitle"><i class="fas fa-trash"></i></a>
                  <a class="project-see"><i class="far fa-edit"></i></a>
                </div>
              
            </div>
        </div> 
    @empty
      <li>No Projects availabe</li>
      @endforelse
    </div>
</div>
@endsection