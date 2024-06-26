<style>
    .alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    .alert-error {
        color: #c40d00;
        background-color: #edd4d4;
        border-color: #e6c3c3;
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    .btn-actions {
        padding: 5px;
        margin: 5px;
    }
</style>

<div class="card-body">
    <div class="row">
        <div class="col-md-6">
            <x-input type="text" wire:model.live="search" wire:keydown.enter="confirmsearch"
                placeholder="Search Transactions..."></x-input>
        </div>
    </div>
    <br>

    <div class="mb-6 pr-4 pl-4">
        @if ($roles->count() > 0)
            <table class="w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            <div class="flex justify-left">
                                {{ __('Name') }}
                            </div>

                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('Role Code') }}
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{ __('Actions') }}
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($roles as $role)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex justify-left">
                                    {{ $role->roles_name }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex justify-center">
                                    {{ $role->roles_code }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap ">

                                <div class="flex justify-center">
                                    <form>
                                        <a href="{{ route('roles.show', $role) }}"
                                            class="btn-actions inline-flex items-center flex-grow px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wider hover:bg-gray-700 active:bg-gray-900">
                                            {{ __('View') }}
                                        </a>
                                    </form>
                                    <form>
                                        <a href="{{ route('roles.edit', $role->id) }}"
                                            class="btn-actions inline-flex items-center flex-grow px-4 py-2 ml-4 bg-indigo-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wider hover:bg-gray-700 active:bg-gray-900">
                                            {{ __('Edit') }}
                                        </a>
                                    </form>
                                    <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="btn-actions inline-flex items-center flex-grow px-4 py-2 ml-4 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wider hover:bg-red-700 active:bg-red-900">
                                            {{ __('Delete') }}
                                        </button>
                                    </form>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $roles->links() }}
        @else
            <p>ไม่พบผู้ใช้</p>
        @endif
    </div>
</div>
