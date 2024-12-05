<x-layout>
    <div class="bg-white p-6">
        <h1 class="text-4xl font-bold text-center lg:py-5 tracking-wide text-gray-900">Q&A</h1>

        <!-- Error Handling -->
        @if ($errors->any())
            <div class="bg-red-100 text-red-800 px-4 py-3 rounded">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form -->
        <form method="POST" action="{{ route('recommendation.get') }}" class="space-y-6 text-center mt-10">
            @csrf

            <!-- Tujuan -->
            <div>
                <p class="font-semibold mb-4 tracking-wide">Tujuan</p>
                <div class="flex items-center space-x-4 justify-center">
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="tujuan" value="diet" class="form-radio text-blue-600" {{ old('tujuan') == 'diet' ? 'checked' : '' }}>
                        <span>DIET</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="tujuan" value="bulking" class="form-radio text-blue-600" {{ old('tujuan') == 'bulking' ? 'checked' : '' }}>
                        <span>BULKING</span>
                    </label>
                </div>
            </div>

            <!-- Hobi -->
            <div>
                <p class="font-semibold mt-10 mb-4 tracking-wide">Apakah memiliki hobi olahraga/gym?</p>
                <div class="flex items-center space-x-4 justify-center">
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="hobi" value="yes" class="form-radio text-blue-600" {{ old('hobi') == 'yes' ? 'checked' : '' }}>
                        <span>YES</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="hobi" value="no" class="form-radio text-blue-600" {{ old('hobi') == 'no' ? 'checked' : '' }}>
                        <span>NO</span>
                    </label>
                </div>
            </div>

            <!-- Rencana Makanan Harian -->
            <div>
                <p class="font-semibold mt-10 mb-4 tracking-wide">Apakah membutuhkan rencana makanan harian?</p>
                <div class="flex items-center space-x-4 justify-center">
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="rencana_makan" value="yes" class="form-radio text-blue-600" {{ old('rencana_makan') == 'yes' ? 'checked' : '' }}>
                        <span>YES</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="rencana_makan" value="no" class="form-radio text-blue-600" {{ old('rencana_makan') == 'no' ? 'checked' : '' }}>
                        <span>NO</span>
                    </label>
                </div>
            </div>

            <!-- Informasi Kalori -->
            <div>
                <p class="font-semibold mt-10 mb-4 tracking-wide">Apakah membutuhkan informasi kalori dari makanan sehari-hari?</p>
                <div class="flex items-center space-x-4 justify-center">
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="kalori" value="yes" class="form-radio text-blue-600" {{ old('kalori') == 'yes' ? 'checked' : '' }}>
                        <span>YES</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="kalori" value="no" class="form-radio text-blue-600" {{ old('kalori') == 'no' ? 'checked' : '' }}>
                        <span>NO</span>
                    </label>
                </div>
            </div>

            <!-- Makronutrien -->
            <div>
                <p class="font-semibold mt-10 mb-4 tracking-wide">Apakah membutuhkan informasi makronutrien?</p>
                <div class="flex items-center space-x-4 justify-center">
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="makronutrien" value="yes" class="form-radio text-blue-600" {{ old('makronutrien') == 'yes' ? 'checked' : '' }}>
                        <span>YES</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="makronutrien" value="no" class="form-radio text-blue-600" {{ old('makronutrien') == 'no' ? 'checked' : '' }}>
                        <span>NO</span>
                    </label>
                </div>
            </div>

            <!-- Camilan -->
            <div>
                <p class="font-semibold mt-10 mb-4 tracking-wide">Apakah membutuhkan camilan selama program?</p>
                <div class="flex items-center space-x-4 justify-center">
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="camilan" value="yes" class="form-radio text-blue-600" {{ old('camilan') == 'yes' ? 'checked' : '' }}>
                        <span>YES</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="camilan" value="no" class="form-radio text-blue-600" {{ old('camilan') == 'no' ? 'checked' : '' }}>
                        <span>NO</span>
                    </label>
                </div>
            </div>

            <!-- Hidrasi -->
            <div>
                <p class="font-semibold mt-10 mb-4 tracking-wide">Apakah membutuhkan informasi hidrasi?</p>
                <div class="flex items-center space-x-4 justify-center">
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="hidrasi" value="yes" class="form-radio text-blue-600" {{ old('hidrasi') == 'yes' ? 'checked' : '' }}>
                        <span>YES</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="hidrasi" value="no" class="form-radio text-blue-600" {{ old('hidrasi') == 'no' ? 'checked' : '' }}>
                        <span>NO</span>
                    </label>
                </div>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" class="w-2/12 mt-16 bg-blue-600 text-white py-2 rounded hover:bg-blue-700 justify-center">Continue</button>
            </div>
        </form>
    </div>
</x-layout>
