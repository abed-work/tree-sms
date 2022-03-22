@extends('layouts.user')

@section('content')
    <div class="sendMessage">
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <label for="">Sending Date</label>
                <select name="" id="">
                    <option value="">day</option>
                    @for ($i = 1; $i < 32; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                <select name="" id="">
                    <option value="">Month</option>
                    @for ($i = 1; $i < 13; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>                        
                    @endfor
                </select>
                <select name="" id="">
                    <option value="">2022</option>
                    <option value="">2023</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Sending Time</label>
                <select name="" id="">
                    <option value="">Hour</option>
                    @for ($i = 1; $i < 13; $i++)
                        <option value="{{ $i }}"> {{ $i }} </option>
                    @endfor
                </select>
                <select name="" id="">
                    <option value="">Min.</option>
                    @for ($i = 0; $i < 60; $i++)
                        <option value="{{ $i }}"> {{ $i }} </option>                        
                    @endfor
                </select>
                <select name="" id="">
                    <option value="">AM</option>
                    <option value="">PM</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Number(s)</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="">Sender ID</label>
                <select name="" id="">
                    <option value="">WATAN</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Message(SMS)</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <button>send</button>
                <button>reset</button>
            </div>
        </form>
    </div>
@endsection