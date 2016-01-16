<div class="profile">
	<h3>{{ $faker->name }}</h3>
	<p><strong>Address:</strong> {{ $faker->address }}<br>
	<strong>Phone:</strong> {{ $faker->phoneNumber }}<br>
	<strong>Email:</strong> {{ $faker->email }}<br>
	<strong>Credit Card:</strong> {{ $faker->creditCardNumber }} ({{ $faker->creditCardType }})
	</p>
</div><!-- .profile -->

<hr>