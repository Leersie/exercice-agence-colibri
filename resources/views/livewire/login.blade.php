<div>
    <h1>Inscription</h1>
    @error('name') <span class="error">{{ $message }}<br/></span> @enderror
    @error('email') <span class="error">{{ $message }}<br/></span> @enderror
    @error('password') <span class="error">{{ $message }}<br/></span> @enderror
    <br/>
    nom : <input wire:model.defer="name" type="text" /><br/>
    mail : <input wire:model.defer="email" type="mail"><br/>
    mdp : <input wire:model.defer="password" type="password"><br/>
    <button wire:click="register">inscription</button>

</div>
