<div>

<button type="button" class="bg-blue-700 hover:bg-blue-800 text-while font-bold py-2 px-4 rounded mb-2" onclick="modal_Agregar_tarea.showModal()">Nueva</button>
<dialog id="modal_Agregar_tarea" class="modal">
  <div class="modal-box w-11/12 max-w-5xl w-full text-sm text-left rtl:text-right text-gray-800 dark:text-gray-800">
    <h3 class="text-lg font-bold">Crear nueva Tarea</h3>
    <p class="py-4">Press ESC key or click the button below to close</p>
    <div class="modal-action">
      <form method="dialog">
        <!-- if there is a button in form, it will Cancelar the modal -->
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
            <label for="titulo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titulo</label>
            <input type="text" id="titulo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Titulo de Tarea" required />
            </div>
            <div>
            <label for="tarea" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tarea</label>
            <input type="text" id="tarea" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Descripcion de la Tarea" required />
            </div>
            <div>
            <button type="button" class="bg-blue-700 hover:bg-blue-800 text-while font-bold py-2 px-4 rounded" >Crear</button>
            <button class="btn btn-primary bg-green-700 hover:bg-green-800 text-while font-bold py-2 px-4 rounded">Cancelar</button>
            </div>
        </div>
      </form>
    </div>
  </div>
</dialog>



<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 ">
                    Titulo
                </th>
                <th scope="col" class="px-6 py-3">
                    Descripcion
                </th>
                <th scope="col" class="px-6 py-3" >
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach(Auth::User()->tasks as $task)
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                {{$task->title}}
                </td>
                <td class="px-10 py-4">
                {{$task->description}}
                </td>
                <td class="px-6 py-2">
                <button type="button" class="bg-yellow-700 hover:bg-yellow-800 text-while font-bold py-2 px-4 rounded" >Editar</button>
                <button type="button" class="bg-red-700 hover:bg-red-800 text-while font-bold py-2 px-4 rounded">Eliminar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



</div>
