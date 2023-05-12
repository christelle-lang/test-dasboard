@include('..header')



@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div class="main_content_iner ">
<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-lg-12">
    <div class="page_title_left d-flex align-items-center">
<h3 class="f_s_25 f_w_700 dark_text mr_30">Client</h3>
<ol class="breadcrumb page_bradcam mb-0">
<li class="breadcrumb-item"><a href="javascript:void(0);">Accueil</a></li>
<li class="breadcrumb-item active">client</li>
</ol>
</div><br>
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title  d-flex justify-content-between w-100">
<h5 class="m-0">Liste des clients</h5>
</div>

</div>
</div>
<div class="white_card_body table-responsive">
<div class="QA_section">
<div class="white_box_tittle list_header">
<h4></h4>
<div class="box_right d-flex lms_block">
    <div class="serach_field_2">
    <div class="search_inner">
        <form action="{{route('recherche_clients')}}" method="post">
            @csrf
           <div class="search_field">
           <input type="search" name="recherche" placeholder="faites votre recherche ici...">
           </div>
           <button > <i class="ti-search"></i> </button>
           </div>
           </div>
           <div class=" ms-2">
           <button type="submit" data-toggle="modal" data-target="#addcategory" class="btn_1">Rechercher</button>
           </div>
           </div>
           </div>
           </form>
       <div class="QA_table mb_30">
        
        @if(isset($table_client) && isset($query))
        <h3>Résultats pour la recherche "{{ $query }}"</h3>
        <br>
    @endif
    
    @php
        $headersDisplayed = false;
    @endphp
    
    @forelse ($table_client as $table_clients)
        @if (!$headersDisplayed)
            <table class="table lms_table_active3 table-hover ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom && prenoms </th>
                        <th scope="col">Email</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Numéro 1</th>
                        <th scope="col">Numéro 2</th>
                        <th scope="col">Statut</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                @php
                    $headersDisplayed = true;
                @endphp
        @endif
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $table_clients->nomClient }} {{ $table_clients->prenomClient }}</td>
                    <td>{{ $table_clients->emailClient }}</td>
                    <td>{{ $table_clients->adresseClient }}</td>
                    <td>{{ $table_clients->numTelClient }}</td>
                    <td>{{ $table_clients->numTelClient2 }}</td>
                    @if ($table_clients->statut == 'Activé')
                    <td><a href="#" class="status_btn">Activé</a></td> 
                @else 
                   <td><a href="#" class="status_btn" style="background-color: #d1151e">Désactivé</a></td> 
                @endif
                    <td>
                        <div class="action_btns d-flex justify-content-center">
                        
                            <a href="{{ route('detail_clients',['id'=>$table_clients->id]) }}"> <i class="fa-solid fa-eye"></i></a>


                        </div>
                    </td>
                </tr> 
    @empty
        @if(isset($query))
            <p>Aucun résultat trouvé pour votre recherche.</p>
        @else
            <p>Aucun client trouvé.</p>
        @endif
    @endforelse
    
    @if ($headersDisplayed)
        </tbody>
        </table>
        
    @endif
    @if(isset($table_client) && isset($query))
    <br>
    <div class="d-flex justify-content-end">
    <a href="{{ route('table_client') }}" class="">Retour à la liste de tous les clients</a>

   </div>
@endif
        </div>

    </div>
    
</div>
</div>
</div>
</div>
</div>
</div>
</div>
        
        

        <div class="footer_part">
            <div class="container-fluid">
            <div class="row">
            <div class="col-lg-12">
            <div class="footer_iner text-center">
            </div>
            </div>
            </div>
            </div>
            </div>

            </section> 
            
         
          

        


                
           @include('..footer')