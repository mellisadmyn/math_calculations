<x-page-layout>
    <!--HERO SECTION START-->
    <div class="px-6 md:px-12 lg:container lg:mx-auto lg:px-6 lg:py-3">
        <section id="home" class="items-center">
            <div class="flex flex-col-reverse lg:flex-row items-center lg:pt-20 lg:mt-30">
                <!--CONTENT-->
                <div class="flex flex-1 flex-col items-center lg:items-start lg:mt-10 lg:mx-10">
                    <h2 class="font-semibold text-primary text-bookmark-blue text-3xl md:text-4 lg:text-5xl text-center lg:text-left mb-6">
                        Arithmetic Sequence
                    </h2>
                    <p class="font-normal text-slate-900 text-lg text-center lg:text-left mb-6 mr-8">
                        An arithmetic sequence is a sequence in which the difference between two successive terms is
                        always same
                    </p>
                </div>
                <!--IMAGE-->
                <div class="flex justify-center flex-1 mb-10 md:mb-16 lg:mb-0 lg:mt-10 lg:mx-10">
                    <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full rounded-2xl" src="img/example.png" />
                </div>
            </div>
        </section>
    </div>
    <!--HERO SECTION END-->

    <!--FORM CALCULATOR SECTION START-->
    <div class="px-6 md:px-12 lg:container lg:mx-auto lg:px-6 lg:py-3">
        <section id="calculator" class="pt-28 text-center">
            <!--HEADER CONTENT-->
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2">
                    CALCULATE HERE
                </h4>
                <h3 class="font-bold text-black text-3xl mb-4 sm:text-4xl lg:text-5xl">
                    Arithmetic Sequence
                </h3>
            </div>

            <!--FORM INPUT-->
            <div class="text-left xl:container m-auto px-6 text-gray-500 md:px-12">
                <!-- using php form to make interface for a place to accommodate user input -->
                <form action="#result" method="POST" class="text-left">
                    @csrf
                    <div class="w-full px-24 mb-8">
                        <label id="term1" class="text-base text-primary font-bold">
                            The First Term (a)
                        </label>
                        <input type="number" name="term1" value="" placeholder="type a number"
                            class="w-full bg-white text-black p-3 border-none rounded-xl focus:outline-none focus:ring-sky-600 focus:ring-1 focus:border-sky-600">
                    </div>

                    <div class="w-full px-24 mb-8">
                        <label id="operator" class="text-base text-primary font-bold">
                            Choose Operator for Distance
                        </label>
                        <div class="flex p-2">
                            <select name="operator" class="justify-center hover:bg-gray-100 border-none rounded-xl">
                                <option value="+"> Plus (+) </option>
                                <option value="-"> Minus (-) </option>
                            </select>
                        </div>
                    </div>

                    <div class="w-full px-24 mb-8">
                        <label id="distance" class="text-base text-primary font-bold">
                            The Distance (b)
                        </label>
                        <input type="number" name="distance" value="" onkeyup="compute()" placeholder="type a number"
                            class="w-full bg-white text-black p-3 border-none rounded-xl focus:outline-none focus:ring-sky-600 focus:ring-1 focus:border-sky-600">
                    </div>

                    <div class="w-full px-24 mb-8">
                        <label id="total" class="text-base text-primary font-bold">
                            Total Number of Sequence (n)
                        </label>
                        <input type="number" name="total" value="" onkeyup="compute()" placeholder="type a number"
                            class="w-full bg-white text-black p-3 border-none rounded-xl focus:outline-none focus:ring-sky-600 focus:ring-1 focus:border-sky-600">
                    </div>

                    <div class="w-full px-24 text-right">
                        <button type="submit"
                            class="text-base font-semibold text-white bg-sky-500 py-3 px-7 rounded-full hover:bg-sky-600">
                            Compute
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <!--FORM CALCULATOR SECTION END-->

    <!--TABLE ANSWER SECTION START-->
    <div class="px-6 md:px-12 lg:container lg:mx-auto lg:px-6 lg:py-3">
        <section id="result" class="pt-28 text-center">
            <!--HEADER CONTENT-->
            <div class="max-w-xl mx-auto text-center mb-5">
                <h4 class="font-semibold text-lg text-primary mb-2">
                    The Answer
                </h4>

                <div class="pt-5 pb-12 w-full items-center">
                    <div class="overflow-auto rounded-lg shadow hidden md:block">
                        <table class="w-full items-justify-center">
                            <thead class="bg-gray-50 border-b-2 border-gray-200 items-center">
                                <tr>
                                    <th class="w-32 p-3 text-sm font-semibold tracking-wide">Index</th>
                                    <th class="w-32 p-3 text-sm font-semibold tracking-wide">Value</th>
                                </tr>
                            </thead>

                            <tbody class="bg-gray-50 divide-x divide-y divide-gray-50">
                                @foreach ($sequence as $key=>$item)
                                <tr>
                                    <td>{{$key}}</td>
                                    <td>{{$item}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--TABLE ANSWER SECTION END-->

    <!--FOOTER SECTION START-->
    <section id="about_us" class="pt-8 text-center">
        <footer class="w-full bg-white py-4">
            <div class="md:px-12 lg:px-28">
                <!--COPYRIGHT-->
                <div class="text-center">
                    <span class="font-semibold text-sky-500 text-lg">
                        copyright © mellisadmyn
                    </span>
                </div>
            </div>
        </footer>
    </section>
    <!--FOOTER SECTION END-->
</x-page-layout>