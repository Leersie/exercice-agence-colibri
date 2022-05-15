<div>
    <h1>Contact</h1>

    @if(\Illuminate\Support\Facades\Auth::user() != null)
        Bonjour <b>{{\Illuminate\Support\Facades\Auth::user()['name']}}</b><br/>
        @error('email') <span class="error">{{ $message }}<br/></span> @enderror
        @error('firstname') <span class="error">{{ $message }}<br/></span> @enderror
        @error('surname') <span class="error">{{ $message }}<br/></span> @enderror
        @error('subject') <span class="error">{{ $message }}<br/></span> @enderror
        @error('msg') <span class="error">{{ $message }}<br/></span> @enderror
        <br/>
        Prenom : <input wire:model.defer="firstname" type="text"><br/>
        Nom : <input wire:model.defer="lastname" type="text"><br/>
        Mail : <input wire:model.defer="email" type="mail"><br/>
        Sujet : <input wire:model.defer="subject" type="text"><br/>
        Message : <input wire:model.defer="msg" type="text"><br/>
        <button wire:click="contact">contact</button>
    @else
        Vous devez être connecté pour accéder à cette page.
        <ul>
            <li><a href={{route('login')}}>Connexion</a></li>
            <li><a href={{route('inscription')}}>Inscription</a></li>
        </ul>
    @endif
</div>
