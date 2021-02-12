<div x-data="{ rm_modal: false}"> 
<form action="{{ route('rm-feira', $feira->id) }}" method="post">
          @csrf
          @method('HEAD')
          <h5 class="text-center">Você deseja mesmo excluir este item?</h5>
            <div class="flex items-center justify-end mt-4">
              <a class="underline text-sm text-red-600 hover:text-red-900 cursor-pointer justify-end" @click="{ rm_modal: false }">
            {{ __('Cancelar?') }}
            </a>
          <x-button class="ml-4">
            {{ __('Excluir') }}
        </x-button>
      </div>
  </form>
</div>
