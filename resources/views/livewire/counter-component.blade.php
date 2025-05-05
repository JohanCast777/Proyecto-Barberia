<div>
    <p>El contador es: {{ $count }}</p>
    <button style="background-color: #3b82f6; color: white; font-weight: bold; padding: 10px 20px; border-radius: 5px; border: none; cursor: pointer;" 
            onmouseover="this.style.backgroundColor='#2563eb'" 
            onmouseout="this.style.backgroundColor='#3b82f6'" 
            wire:click="increment">
        Incrementar
    </button>
    <button style="background-color: #ef4444; color: white; font-weight: bold; padding: 10px 20px; border-radius: 5px; border: none; cursor: pointer;" 
            onmouseover="this.style.backgroundColor='#dc2626'" 
            onmouseout="this.style.backgroundColor='#ef4444'" 
            wire:click="decrement">
        Disminuir
    </button>
</div>