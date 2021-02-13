<x-guest-layout>
	<div x-data="app()" x-on:set-token.window="login($event)">
		<div class="w-full bg-gray-900">
			<div class="max-w-3x1 min-h-screen bg-white mx-auto">
				<nav class="w-full bg-yellow-200 py-2 px-4 flex justify-between">
					App
					<template x-if="is_logged">
						<div>
							<span x-text="user.name"/>
						</div>
						<div>
							<a href="http://localhost:8000/spa">Sair</a>
						</div>
					</template>
					<template x-if="!is_logged">
						<div x-data="loginForm('{{ action([\App\Http\Controllers\APIAuthController::class, 'login']) }}')">
							<form @submit.prevent="login()">
								<input class="rounded-md py-1 shadow-md" type="text" name="email" placeholder="Email" x-model="email">
								<input class="rounded-md py-1 shadow-md" type="password" name="password" placeholder="Password" x-model="pw">
								<input class="rounded-md py-1 px-2 bg-gray-800 text-white shadow-md" type="submit" value="Entrar">
							</form>
						</div>
					</template>
				</nav>
				<main>
					<template x-for="feira in feiras" :key="feira">
						<div>
							<span x-text="feira.dia"></span>
							(<span x-text="feira.valor"></span>)
						</div>
					</template>
				</main>
			</div>
		</div>
	</div>
</x-guest-layout>