@extends('layout')

@section('content')
    <main class="container pb-2 pt-3">
        <div class="row">
            <div class="col-lg">
                <div class="card p-3">
                    <div class="card-body">
                        <h5 class="text-center">Szaloncukor hozzáadása</h5>
                        <form action="/" method="post">
                            @csrf

                            <label class="form-label" for="marka">Szaloncukor márkája</label>
                            <input class="form-control" type="text" name="marka" id="marka"
                                value="{{ 'marka' }}">
                            @error('marka')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="form-label mt-3" for="iz">Szaloncukor íze</label>
                            <input class="form-control" type="text" name="iz" id="iz"
                                value="{{ 'iz' }}">
                            @error('iz')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="form-label mt-3" for="suly">Szaloncukor súlya</label>
                            <input class="form-control" type="number" name="suly" id="suly"
                                placeholder="Minimum 100 g" value="{{ 'suly' }}">
                            @error('suly')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <label class="form-label mt-3" for="ar">Szaloncukor ára</label>
                            <input class="form-control" type="number" name="ar" id="ar"
                                placeholder="Minimum 100 Ft" value="{{ 'ar' }}">
                            @error('ar')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <div class="mt-3">
                                <input class="form-check-input" type="checkbox" name="plusz18" id="plusz18">
                                <label class="form-check-label" for="plusz18">18+ - csak felnőtteknek</label>
                            </div>

                            <button class="btn btn-success mt-3 w-100" type="submit">Szaloncukor hozzáadása</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg">
                <h5 class="text-center">Termékek</h5>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Márka</th>
                            <th>Íz</th>
                            <th>Súly</th>
                            <th>Ár</th>
                            <th>18+</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item['marka'] }}</td>
                                <td>{{ $item['iz'] }}</td>
                                <td>{{ $item['suly'] }} g</td>
                                <td>{{ $item['ar'] }} Ft</td>
                                <td>
                                    @if ($item['plusz18'])
                                        <img src="/img/plusz18.png" alt="plusz18.png" height="26px">
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
