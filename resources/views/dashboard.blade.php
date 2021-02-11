<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12" x-data="{ add_modal: false}">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                @foreach(Auth::user()->feiras->sortByDesc('dia') as $feira)
                    <div class="p-3 m-1 rounded-lg border hover:bg-blue-200">
                        Feira realizada no dia: {{ $feira->dia }} <br> no valor de: {{ $feira->valor }} R$ <br>
                        Descrição: 
                    </div>
                @endforeach
                </div>
                    <div class="mx-80 p-3 m-1 rounded-lg bg-green-200 text-center cursor-pointer hover:bg-green-300" @click="add_modal = true">
                        Adicionar
                </div>
            </div>
        </div>

<div class="fixed z-10 inset-0 overflow-y-auto" x-show="add_modal">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <!--
      Background overlay, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="add_modal = false">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <!-- This element is to trick the browser into centering the modal contents. -->
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
    <!--
      Modal panel, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        To: "opacity-100 translate-y-0 sm:scale-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100 translate-y-0 sm:scale-100"
        To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    -->
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        <div>
            <h1>Adcionar Feira</h1>
            <form action="{{ route('add-feira') }}" method="POST">
                @csrf
               <div>
                    <x-label for="dia" :value="__('Dia')" />

                    <x-input id="dia" class="block mt-1 w-full" type="text" name="dia" :value="old('dia')" required />
                </div>
                <div>
                    <x-label for="valor" :value="__('Valor')" />

                    <x-input id="valor" class="block mt-1 w-full" type="number" name="valor" :value="old('valor')" required />
                </div>
                <div class="flex items-center justify-end mt-4">
                    
                    <a class="underline text-sm text-red-600 hover:text-red-900 cursor-pointer justify-end" @click="add_modal = false">
                    {{ __('Cancelar?') }}
                    </a>
                    
                    <x-button class="ml-4">
                    {{ __('Cadastrar') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
    </div>
</x-app-layout>
