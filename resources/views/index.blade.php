<x-layout title="index">
  <form method="POST" action={{ route('rota.um')}}>
    <input type="text" name="nome" />
    <input type="int" name="idade" />
    <button type="submit">Enviar</button>
  </form>
</x-layout>