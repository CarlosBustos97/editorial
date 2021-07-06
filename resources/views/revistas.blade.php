
        @yield('content')
        <div class="container">
                <table class="table">
                    <thead>
                        <th>Titulo</th>
                        <th>Fecha</th>
                        <th>Paginas</th>
                        <th>&nbsp;</th>
                    </thead>
                    <tbody>
                        @foreach ($revistas as $revista)
                            <tr>
                                <td>{{ $revista->titulo }}</td>
                                <td>{{ $revista->fecha }}</td>
                                <td>{{ $revista->num_paginas }}</td>
                                <td>
                                    <form action="{{route('eliminarRevista',$revista)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button  
                                            type="submit" 
                                            class="btn btn-sm btn-danger" 
                                            onclick="return confirm('Desea eliminar')"> 
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            
                        @endforeach
                    </tbody>
                </table>
                <br>
                <div class="row">                
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>                    
                    @endif
                    <form action="{{route('agregarRevista')}}" method="POST" class="">
                        <div class="form-group row">
                            <div class="form-group col-sm-2 ">
                                <label class="col-sm">Título</label>                                           
                                <input type="text" name="titulo" class="form-control" placeholder="Titulo" value="{{old('titulo')}}">
                            </div>
                            <div class="form-group col-sm-2">
                                <label class="col-sm">Fecha</label>                                           
                                <input type="date" name="fecha" class="form-control" value="{{old('fecha')}}">
                            </div>
                            <div class="form-group col-sm-1">
                                <label class="col-sm">Ejemplares</label>                                           
                                <input type="number" name="ejemplares" class="form-control" value="{{old('ejemplares')}}">
                            </div>
                            <div class="form-group col-sm-1">
                                <label class="col-sm">Páginas</label>                                           
                                <input type="number" name="paginas" class="form-control" value="{{old('paginas')}}">
                            </div>
                            <div class="form-group col-sm-2 ">
                                <label class="col-sm">Tipo</label>                                                                       
                                <select class="form-select" name="tipo" id="tipo">
                                    <option value="">Seleccione...</option>   
                                    @foreach ($tipos as $tipo)
                                        <option value="{{$tipo->id}}">{{$tipo->tipo}}</option>   
                                    @endforeach
                                </select>
                                
                            </div>
                            <div class="form-group col-sm-1 ">
                                @csrf
                                <label type="hidden"></label>
                                <button type="submit" class="btn btn-primary"> Agregar </button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
        
       
