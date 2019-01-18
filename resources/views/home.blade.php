@extends('layouts.application')
@section('content')
        <div class="row">
            <div class="col-md-12 col-sm-12">
                @if($dates_diff > 0)
                <h2 class="text-muted">Formulario Preguntas</h2>
                <form method="post" action="/questions" id="form-questions">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="q1">¿Qué te gustaría que agregáramos al informe?</label>
                        <textarea class="form-control" id="q1" name="q1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="q2">¿La información es correcta?</label>
                        <select class="form-control" id="q2" name="q2">
                            <option value="si">Si</option>
                            <option value="no">No</option>
                            <option value="mas o menos">Más o menos</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="q3">¿Del 1 al 5, es rápido el sitio?</label>
                        <select class="form-control" id="q3" name="q3">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" id="send-questions">Enviar</button>
                </form>
                @else
                    <h2 class="text-muted">No hay preguntas disponibles hasta el próximo mes.</h2>
                @endif
            </div>
        </div>
@endsection