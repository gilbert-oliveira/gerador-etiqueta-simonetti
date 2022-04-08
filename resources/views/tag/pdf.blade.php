@extends('layouts.app')

@section('main')
    <div class="grid grid-cols-3 justify-center w-[80%] mx-auto mt-8">
        <div class="col-span-3 border-[1.75px] border-black py-2 border-t-[1.75px] text-lg space-x-2">
            <div class="font-bold flex justify-center items-center">IDENTIFICAÇÃO: </div>
            <div class="flex justify-center items-center">{{ $data['identificacao'] }}</div>
        </div>

        <div class="col-span-1 justify-start items-center py-2 border-x-[1.75px] border-black">
            <span class="ml-2 font-bold">ORIGEM:</span>
        </div>
        <div class="col-span-2 flex justify-end items-center border-r-[1.5px] border-black py-2 p-2">
            <span>
                {{ $data['origem'] }}
            </span>
        </div>

        <div class="col-span-1 justify-start items-center py-2 border-x-[1.75px] border-t-[1.75px] border-black p-2">
            <span class="font-bold">DESTINO/SETOR:</span>
        </div>
        <div class="col-span-2 flex justify-end items-center border-r-[1.5px] border-black py-2 border-t-[1.75px] p-2">
            <span>
                {{ $data['destino'] }}
            </span>
        </div>

        <div class="col-span-1 justify-start items-center py-2 border-x-[1.75px] border-t-[1.75px] border-black p-2">
            <span class="font-bold">DATA:</span>
        </div>
        <div class="col-span-2 flex justify-end items-center border-r-[1.5px] border-black py-2 border-t-[1.75px] p-2">
            <span>
                {{ date('d/m/Y') }}
            </span>
        </div>

        <div class="col-span-1 justify-start items-center py-2 border-x-[1.75px] border-t-[1.75px] border-black p-2">
            <span class="font-bold">PRODUTO:</span>
        </div>
        <div class="col-span-2 flex justify-end items-center border-r-[1.5px] border-black py-2 border-t-[1.75px] p-2">
            <span>
                {{ $data['produto'] }}
            </span>
        </div>

        <div class="col-span-1 justify-start items-center py-2 border-x-[1.75px] border-t-[1.75px] border-black p-2">
            <span class="font-bold">CHAMADO:</span>
        </div>
        <div class="col-span-2 flex justify-end items-center border-r-[1.5px] border-black py-2 border-t-[1.75px] p-2">
            <span>
                {{ $data['chamado'] }}
            </span>
        </div>

        <div class="col-span-1 justify-start items-center py-2 border-x-[1.75px] border-t-[1.75px] border-black p-2">
            <span class="font-bold">PLAQUETA N°:</span>
        </div>

        <div class="col-span-2 flex justify-end items-center border-r-[1.5px] border-black py-2 border-t-[1.75px] p-2">
            <span>
                {{ $data['patrimonio'] }}
            </span>
        </div>

        <div class="print col-span-3 border-[1.75px] border-black py-2 border-t-[1.75px] p-2">
            <span class="">
                <b>Motivo:</b> {{ $data['descricao'] }}
            </span>
        </div>
    </div>
@endsection
