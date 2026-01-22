<div>
    {{-- Heading --}}
    <section class="pt-6">
        <div class="container px-4 px-lg-0">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="display-4 fw-bold">List of Establishments</h1>
                </div>
            </div>
        </div>
    </section>

    {{-- Table Section --}}
    <section class="pt-6">
        <div class="container px-4 px-lg-0">

            {{-- Search --}}
            <div class="mb-4 d-flex justify-content-end">
                <input
                    type="search"
                    class="form-control w-50"
                    placeholder="Search by Establishment Name or Email"
                    wire:model.live.debounce.300ms="search"
                >
            </div>

            {{-- Table --}}
            <div class="table-responsive">
                <table class="table table-hover align-middle border">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Establishment Name</th>
                            <th>Type</th>
                            <th>Email</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($estlists as $index => $estlist)
                            @if($estlist->esttype !== 'gov')
                                <tr>
                                    <td>
                                        {{ $estlists->firstItem() + $index }}
                                    </td>

                                    <td class="fw-semibold">
                                        {{ $estlist->estname }}
                                    </td>

                                    <td>
                                        <span class="badge bg-info text-dark">
                                            {{ ucfirst($estlist->esttype) }}
                                        </span>
                                    </td>

                                    <td>
                                        {{ $estlist->email ?? '-' }}
                                    </td>

                                    <td class="text-center">
                                        <a href="/view/estrecords/{{ $estlist->id }}"
                                           class="btn btn-sm btn-primary">
                                            View
                                        </a>
                                    </td>
                                </tr>
                            @endif
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-4 text-muted">
                                    No establishments found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Pagination --}}
            <div class="mt-4">
                {{ $estlists->links() }}
            </div>

        </div>
    </section>
</div>
