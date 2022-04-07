@extends('layouts.app')

@section('main')

    <div class="flex justify-center md:mt-[2rem] mt-[1rem]">

        <div class="p-4 w-11/12 sm:w-9/12 md:w-5/12 bg-white rounded-lg border shadow-md sm:p-6 bg-gray-100 ">

            <div class=" flex justify-center items-center space-x-2 md:text-3xl text-xl text-gray-700">

                <span>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-printer-fill md:w-10 w-7" viewBox="0 0 16 16">
                      <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                      <path
                          d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                    </svg>
                </span>

                <span>

                    Gerar Etiqueta
                </span>
            </div>

            <form class="md:mt-4 mt-3" action="{{ route('tag.store') }}" method="GET" target="_blank">

                @csrf

                <div class="grid">

                    <div class="relative z-0 mb-6 w-full group">

                        <input type="text" name="identificacao" id="identificacao"
                               class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-red-300 appearance-none text-dark border-gray-500 focus:border-red-500 focus:border-opacity-60 focus:outline-none focus:ring-0 focus:border-red-500 peer"
                               placeholder=" " required="">
                        <label for="identificacao"
                               class="absolute text-sm text-gray-500 text-gray-600 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:text-gray-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Identificação</label>
                    </div>
                </div>

                <div class="grid xl:grid-cols-2 xl:gap-6">

                    <div class="relative z-0 mb-6 w-full group">

                        <input type="text" name="origem" id="origem"
                               class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-red-300 appearance-none text-dark border-gray-500 focus:border-red-500 focus:border-opacity-60 focus:outline-none focus:ring-0 focus:border-red-500 peer"
                               placeholder=" " required="">
                        <label for="origem"
                               class="absolute text-sm text-gray-500 text-gray-600 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:text-gray-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Origem/Setor</label>
                    </div>

                    <div class="relative z-0 mb-6 w-full group">

                        <input type="text" name="destino" id="destino"
                               class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-red-300 appearance-none text-dark border-gray-500 focus:border-red-500 focus:border-opacity-60 focus:outline-none focus:ring-0 focus:border-red-500 peer"
                               placeholder=" " required="">
                        <label for="destino"
                               class="absolute text-sm text-gray-500 text-gray-600 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:text-gray-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Destino/Setor</label>
                    </div>
                </div>

                <div class="grid">

                    <div class="relative z-0 mb-6 w-full group">

                        <input type="text" name="produto" id="produto"
                               class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-red-300 appearance-none text-dark border-gray-500 focus:border-red-500 focus:border-opacity-60 focus:outline-none focus:ring-0 focus:border-red-500 peer"
                               placeholder=" " required="">
                        <label for="produto"
                               class="absolute text-sm text-gray-500 text-gray-600 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:text-gray-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Produto</label>
                    </div>
                </div>

                <div class="grid xl:grid-cols-2 xl:gap-6">

                    <div class="relative z-0 mb-6 w-full group">

                        <input type="number" name="patrimonio" id="patrimonio"
                               class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-red-300 appearance-none text-dark border-gray-500 focus:border-red-500 focus:border-opacity-60 focus:outline-none focus:ring-0 focus:border-red-500 peer"
                               placeholder=" " required="">
                        <label for="patrimonio"
                               class="absolute text-sm text-gray-500 text-gray-600 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:text-gray-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Patrimônio</label>
                    </div>

                    <div class="relative z-0 mb-6 w-full group">

                        <input type="number" name="chamado" id="chamado"
                               class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-red-300 appearance-none text-dark border-gray-500 focus:border-red-500 focus:border-opacity-60 focus:outline-none focus:ring-0 focus:border-red-500 peer"
                               placeholder=" " required="" min="0">
                        <label for="chamado"
                               class="absolute text-sm text-gray-500 text-gray-600 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:text-gray-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Chamado</label>
                    </div>
                </div>

                <div class="mb-6 w-full group">

                    <label for="descricao"
                           class="text-sm text-gray-500 text-gray-600">Descrição</label>

                    <textarea id="descricao" rows="4" name="descricao"
                              class="h-76 w-full text-sm text-gray-900 bg-transparent border-2 border-red-300 rounded appearance-none text-dark border-gray-500 focus:border-red-500 focus:border-opacity-60 focus:outline-none focus:ring-0 focus:border-red-500 peer bg-gray-50 mt-2"
                              placeholder=""></textarea>
                </div>

                <div class="w-full group flex justify-end space-x-2">

                    <button type="reset"
                            class="flex justify-center items-center space-x-2 text-white bg-red-700 hover:bg-red-800 focus:ring-2 focus:outline-none font-medium rounded-lg text-sm sm:w-auto px-3.5 py-2.5 text-center bg-red-500 hover:bg-red-700 focus:ring-black">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path
                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd"
                                  d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>

                        <span>
                            Limpar
                        </span>
                    </button>

                    <button type="submit"
                            class="flex justify-center items-center space-x-2 text-white hover:bg-red-800 focus:ring-2 focus:outline-none font-medium rounded-lg text-sm sm:w-auto px-3.5 py-2.5 text-center bg-gray-700 hover:bg-gray-800 focus:ring-black">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                            <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                            <path
                                d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
                        </svg>

                        <span>
                                Gerar
                            </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

