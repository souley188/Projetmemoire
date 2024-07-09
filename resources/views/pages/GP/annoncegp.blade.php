@extends('pages.GP.gpdashboard')
@section('content')



<div class="main-contained">
    <div class="form-contained">
    <h2 class="title-ville">Formulaire GP</h2>
     @if ($errors->any())
            <div class="error-list">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    @endif
    
        <form action="{{ route('gp.store') }}" method="post">
            @csrf
            <div class="form-group">
            	<input type="hidden" name="user_gp" value="{{ $user_gp->id }}">
                <label for="city-name">Nom du GP</label>
                <input type="text" id="city-name" value="{{ $user_gp->nom_gp }}" disabled> <br>
                
                @error('nom_gp')
                <span class="change">
                    {{$message}}
                @enderror
                </span>
                <style>
                    .change{
                        color: red;
                    }
                </style>
            </div>
           
            
            <div class="form-group">
                
                <label for="country">Ville de Depart</label>
                <select id="country" name="ville_depart_id" value="{{old('ville_depart_id') ? old('ville_depart_id') : '' }}"> <br>
                @foreach ($villes as $ville )
                
                
                <option value="{{$ville->id}}">{{ $ville->nom_ville }}</option>
                
                @endforeach
                </select>
                @error('ville_depart_id')
                <span class="change">
                    {{$message}}
                @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="country">Ville de D'arrivée</label>
                <select  id="country" name="ville_arrive_id" value="{{old('ville_arrive_id') ? old('Date_darrive_id') : '' }}"> <br>
                @foreach ($villes as $ville )
                
                
                <option value="{{$ville->id}}">{{ $ville->nom_ville }}</option>
                
                @endforeach
               
            
               </select>
                @error('ville_arrive_id')
                <span class="change">
                    {{$message}}
                @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="country">Date de Depart</label>
                <input type="datetime-local" id="country" name="date_depart" value="{{old('date_depart') ? old('date_depart') : '' }}"> <br>
                
                @error('date_depart')
                <span class="change">
                    {{$message}}
                @enderror
                </span>
            </div>
           
            <div class="form-group">
                <label for="country">Date de D'arrivée</label>
                <input type="datetime-local" id="country" name="date_arrive" value="{{old('date_arrive') ? old('date_arrive') : '' }}"> <br>
                
                @error('date_arrive')
                <span class="change">
                    {{$message}}
                @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="country">Prix_colis/KG</label>
                <input type="" id="country" name="montant" value="{{old('montant') ? old('montant') : '' }}"> <br>
                
                @error('montant')
                <span class="change">
                    {{$message}}
                @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="contact">Contact reception</label>
                <select  id="contact" name="contact_gp_id" value="{{old('contact_gp_id') ? old('Date_darrive_id') : '' }}"> <br>
                @foreach ($contact_gps as $contact_gp )
                
                
               	 <option value="{{$contact_gp->id}}">{{ $contact_gp->nom }}</option>
                
                @endforeach
               
            
               </select>
                @error('contact_gp_id')
                <span class="change">
                    {{$message}}
                @enderror
                </span>
            </div>
            
            <div>
                <input type="submit" value="Ajouter"> <br>
            </div>
        </form>
    </div>
    <div class="list-contained">
        <table>
            <legend>Liste des GP</legend>
            <thead>
                <tr>
                    <th>Nom du GP</th>
                    <th>Ville de depart</th>
                    <th>Ville d'arrivée</th>
                    <th>Date de depart</th>
                    <th>Date d'arrivée</th>                  
                    <th>Prix_colis/kg</th>
                    <th>Contact de reception</th>
                   
                    
                </tr>
            </thead>
            <tbody>
                
               @foreach ($gps as $gp )
               <tr>
                    <td>{{ $user_gp->nom_gp }}</td>
                    <td>{{ $gp->ville_depart->nom_ville }}  ({{$gp->ville_depart->pays }})</td>
                    <td>{{ $gp->ville_arrive->nom_ville }}  ({{$gp->ville_depart->pays }})    </td>
                    <td>{{ $gp->date_depart }}</td>
                    <td>{{ $gp->date_arrive }}</td>
                    <td>{{ $gp->montant }}</td>
                    <td>{{$contact_gp->nom}}</td>
                         

                                  </tr>
               
               @endforeach
                        
                        
                        
                    
                
            </tbody>
        </table>
    </div>
    <style>
    	.form-container {
width: 70%;
  background: #fff;
  padding: 20px 40px;
  border-radius: 8px;
  
}
h2 {
  margin-bottom: 40px;
  color: #333;
}
.form-group {
  margin-bottom: 15px;
}
legend{
    font-size: 25px;
    margin: 10px;
}
label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}
input[type="text"], select {
  width: 40%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 4px;
  font-size: 16px;
  box-sizing: border-box;
}
input[type="submit"] {
  width: 40%;
  padding: 10px;
  background-color: #2a2185;
  border: none;
  border-radius: 4px;
  color: white;
  font-size: 16px;
  cursor: pointer;
}
input[type="submit"]:hover {
  background-color: #0056b3;
}
main{
    margin: 180px ;
    margin-top: 60px;
    text-align: center;
}
.main-container {
  display: flex;
  justify-content: space-between;

}
.form-container, .list-container {
  width: 48%;
  border: 1px solid #ddd;
  padding: 20px;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
  left: 200px;
}
.form-container {
  padding-right: 20px;
  border: #222;
  margin: 100px;
  text-align: center;
}
.list-container {
  padding-left: 20px;
  margin-right: 10px;
}
.list-container legend {
text-align: center;
font-size: 25px;
padding: 35px;
}
table {
  width: 100%;
  border-collapse: collapse;
  
}
th, td {
  border: 1px solid #ddd;
  padding: 8px;
  left: - 12px;
  
}
th {
  background-color:#2a2185;
  color: #fff;
}
.title-ville{
  text-align: center;
}
.country{
  text-align: center;
}
.form-containes {
  width: 48%;
  border: 1px solid #ddd;
  padding: 20px;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);

}
.form-containes {
  padding-right: 20px;
  border: #222;
  margin: 100px auto;
  text-align: center;
}
    .table-actions {
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.table-actions a,
.table-actions form button {
    background-color: #2a2185;
    color: white;
    padding: 5px 10px;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.table-actions a:hover,
.table-actions form button:hover {
    background-color: #2a2185;
}

.table-actions form {
    display: inline;
    margin: 0;
    padding: 0;
}
</style>
</div>
  

@endsection