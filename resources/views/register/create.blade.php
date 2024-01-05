<x-layout>
	<section class="px-6 py-8">
		<form method="POST" action="/register">
			@csrf
			<h1>Register</h1>

			<div class="mb-6">
				<label class="block mb-2 uppercase font-bold text-xs text-gray-700"
					for="name"
				>
					Name
				</label>

				<input class="border border-gray-400 p-2 w-full"
					type="text"
					name="name"
					id="name"
					required
				>

				<label class="block mb-2 uppercase font-bold text-xs text-gray-700"
				for="username"
			>
				Username
			</label>

		<input class="border border-gray-400 p-2 w-full"
			type="text"
			name="username"
			id="username"
			required
		>

		<label class="block mb-2 uppercase font-bold text-xs text-gray-700"
		for="email"
	>
		Email
	</label>

	<input class="border border-gray-400 p-2 w-full"
		type="email"
		name="email"
		id="email"
		required
	>

			<label class="block mb-2 uppercase font-bold text-xs text-gray-700"
			for="password"
		>
			Password
		</label>

		<input class="border border-gray-400 p-2 w-full"
			type="password"
			name="password"
			id="password"
			required
		>


<div class="mb-6">
			<button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
				Submit
			</button>
</div>

				{{-- @error('name')
					<p class="text-red-500 text-xs mt-2">{{ $message }}</p>
				@enderror --}}

		</form>
	</section>
</x-layout>
