<div>
    <h1>Connexion</h1>
    <span class="error">{{ $loginError }}<br/></span>
    @error('email') <span class="error">{{ $message }}<br/></span> @enderror
    @error('password') <span class="error">{{ $message }}<br/></span> @enderror
    <br/>
    mail : <input wire:model.defer="email" type="mail"><br/>
    mdp : <input wire:model.defer="password" type="password"><br/>
    <button wire:click="login">connexion</button>

</div>
