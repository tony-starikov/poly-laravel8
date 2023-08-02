const About = {
    template:
    '<div>' +
        '<div v-bar="{useScrollbarPseudo: true}" ' +
        'class="container-fluid p-4 d-none d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center" ' +
        'style="height: 75vh; background-color: rgba(255,255,255,0.07);border-radius: 25px;"' +
        '>' +
        '<div id="container"' +
        'class="row p-0 text-center d-flex justify-content-center overflow-hidden" ' +
        'style="scrollbar-width: none; ' +
        'height: 60vh; ' +
        'color: rgb(255,255,255); ' +
        'box-sizing: border-box; ' +
        'max-width: 85%; ' +
        'background-color: rgba(0,0,0,0.6);' +
        'border-radius: 25px;"' +
        '>' +

        '<img src="/images/about.png" style="border-radius: 25px 25px 0 0;" alt="" class="img-responsive w-100 p-0 m-0">' +

        // description

        '<p class="mx-0 p-0 mt-4 d-none d-md-flex d-lg-flex d-xl-none d-xxl-none" style="color: rgba(255,255,255,1); width: 80%; font-weight: 400; font-size: larger;">' +
        '{{ description }}' +
        '</p>' +

        '<p class="mx-auto mt-4 d-none d-sm-none d-md-none d-lg-none d-xl-flex d-xxl-flex" style="color: rgba(255,255,255,1); width: 80%; font-weight: 400; font-size: larger;">' +
        '{{ description }}' +
        '</p>' +

        // description

        '<hr size="4" class="mx-auto my-2 rounded-pill" style="width: 40%; opacity: 1;">' +


        '<h2 class="fw-bolder">{{ field_company_profile }}</h2>' +

        // Company name

        '<div class="row w-75 mx-auto justify-content-around d-none d-sm-none d-md-flex d-lg-flex d-xl-none d-xxl-none">\n' +
        '<div class="col-3 text-start"><h5 class="fw-bolder">{{ field_company_name }}: </h5></div>\n' +
        '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ company_name }}</p></div>\n' +
        '</div>' +

        '<div class="row w-75 mx-auto justify-content-center d-none d-sm-none d-md-none d-lg-none d-xl-flex d-xxl-flex">\n' +
        '<div class="col-3 text-start"><h5 class="fw-bolder">{{ field_company_name }}: </h5></div>\n' +
        '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ company_name }}</p></div>\n' +
        '</div>' +

        // Company name

        // Location

        '<div class="row w-75 mx-auto justify-content-around d-none d-sm-none d-md-flex d-lg-flex d-xl-none d-xxl-none">\n' +
        '<div class="col-3 text-start"><h5 class="fw-bolder">{{ field_location }}: </h5></div>\n' +
        '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ location_text }}</p></div>\n' +
        '</div>' +

        '<div class="row w-75 mx-auto justify-content-center d-none d-sm-none d-md-none d-lg-none d-xl-flex d-xxl-flex">\n' +
        '<div class="col-3 text-start"><h5 class="fw-bolder">{{ field_location }}: </h5></div>\n' +
        '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ location_text }}</p></div>\n' +
        '</div>' +

        // Location

        // Establishment

        '<div class="row w-75 mx-auto justify-content-around d-none d-sm-none d-md-flex d-lg-flex d-xl-none d-xxl-none">\n' +
        '<div class="col-3 text-start"><h5 class="fw-bolder">{{ field_establishment }}: </h5></div>\n' +
        '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ establishment }}</p></div>\n' +
        '</div>' +

        '<div class="row w-75 mx-auto justify-content-center d-none d-sm-none d-md-none d-lg-none d-xl-flex d-xxl-flex">\n' +
        '<div class="col-3 text-start"><h5 class="fw-bolder">{{ field_establishment }}: </h5></div>\n' +
        '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ establishment }}</p></div>\n' +
        '</div>' +

        // Establishment

        // Employee

        '<div class="row w-75 mx-auto justify-content-around d-none d-sm-none d-md-flex d-lg-flex d-xl-none d-xxl-none">\n' +
        '<div class="col-3 text-start"><h5 class="fw-bolder">{{ field_employee }}: </h5></div>\n' +
        '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ employee }}</p></div>\n' +
        '</div>' +

        '<div class="row w-75 mx-auto justify-content-center d-none d-sm-none d-md-none d-lg-none d-xl-flex d-xxl-flex">\n' +
        '<div class="col-3 text-start"><h5 class="fw-bolder">{{ field_employee }}: </h5></div>\n' +
        '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ employee }}</p></div>\n' +
        '</div>' +

        // Employee

        // CEO

        '<div class="row w-75 mx-auto justify-content-around d-none d-sm-none d-md-flex d-lg-flex d-xl-none d-xxl-none">\n' +
        '<div class="col-3 text-start"><h5 class="fw-bolder">{{ field_ceo }}: </h5></div>\n' +
        '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ ceo }}</p></div>\n' +
        '</div>' +

        '<div class="row w-75 mx-auto justify-content-center d-none d-sm-none d-md-none d-lg-none d-xl-flex d-xxl-flex">\n' +
        '<div class="col-3 text-start"><h5 class="fw-bolder">{{ field_ceo }}: </h5></div>\n' +
        '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ ceo }}</p></div>\n' +
        '</div>' +

        // CEO

        // Director

        '<div class="row w-75 mx-auto justify-content-around d-none d-sm-none d-md-flex d-lg-flex d-xl-none d-xxl-none">\n' +
        '<div class="col-3 text-start"><h5 class="fw-bolder">{{ field_director }}: </h5></div>\n' +
        '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ director }}</p></div>\n' +
        '</div>' +

        '<div class="row w-75 mx-auto justify-content-center d-none d-sm-none d-md-none d-lg-none d-xl-flex d-xxl-flex">\n' +
        '<div class="col-3 text-start"><h5 class="fw-bolder">{{ field_director }}: </h5></div>\n' +
        '<div class="col-7 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ director }}</p></div>\n' +
        '</div>' +

        // Director

        '<hr size="4" class="mx-auto my-2 mb-4 rounded-pill" style="width: 40%; opacity: 1;">' +

        '</div>' +

        '<div class="ms-xxl-4 ms-xl-3 ms-lg-3 ms-md-3 ms-sm-2 ms-1 mt-5 position-absolute top-0 start-0">' +
        '<button type="button" @click="hasHistory() ? $router.go(-1) : $router.push(\'/\')" class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block btn btn-circle btn-xl btn-light m-0 p-0 border-0" style="background-color: rgba(255, 255, 255, 0.3);">' +
        '<i class="fas fa-chevron-left fa-2x pe-1" style="color: rgba(255, 255, 255, 0.5);"></i>' +
        '</button>' +

        '<button type="button" @click="hasHistory() ? $router.go(-1) : $router.push(\'/\')" class="d-block d-sm-block d-md-block d-lg-block d-xl-none d-xxl-none btn btn-circle btn-light m-0 p-0 border-0" style="background-color: rgba(255, 255, 255, 0.3);">' +
        '<i class="fas fa-chevron-left fa-2x pe-1" style="color: rgba(255, 255, 255, 0.5);"></i>' +
        '</button>' +
        '</div>' +

        '<div class="ms-xxl-4 ms-xl-3 ms-lg-3 ms-md-3 ms-sm-2 ms-1 mb-5 position-absolute bottom-0 start-0">' +
        '<button type="button" @click="scrollToTop()" class="d-none d-sm-none d-md-none d-lg-none d-xl-block d-xxl-block btn btn-circle btn-xl btn-light m-0 p-0 border-0" style="background-color: rgba(255, 255, 255, 0.3);">' +
        '<i class="fas fa-chevron-up fa-2x pb-1" style="color: rgba(255, 255, 255, 0.5);"></i>' +
        '</button>' +

        '<button type="button" @click="scrollToTop()" class="d-block d-sm-block d-md-block d-lg-block d-xl-none d-xxl-none btn btn-circle btn-light m-0 p-0 border-0" style="background-color: rgba(255, 255, 255, 0.3);">' +
        '<i class="fas fa-chevron-up fa-2x pb-1" style="color: rgba(255, 255, 255, 0.5);"></i>' +
        '</button>' +
        '</div>' +

        '</div>' +

        '<div class="container-fluid p-0 m-0 d-flex d-sm-flex d-md-none justify-content-center" ' +
        'style="background-color: rgba(255,255,255,0.07);border-radius: 25px;"' +
        '>' +
            '<div id="container"' +
            'class="row p-0 text-center d-flex justify-content-center overflow-auto" ' +
            'style="scrollbar-width: none; ' +
            'color: rgb(255,255,255); ' +
            'box-sizing: border-box; ' +
            'max-width: 100%; ' +
            'background-color: rgba(0,0,0,0.6);' +
            'border-radius: 25px;"' +
            '>' +

                '<img src="/images/about.png" style="border-radius: 25px 25px 0 0;" alt="" class="img-responsive w-100 p-0 m-0">' +

                // description

                '<p class="mx-0 p-0 mt-4 d-flex d-sm-flex d-md-flex d-lg-flex d-xl-none d-xxl-none" style="color: rgba(255,255,255,1); width: 80%; font-weight: 400; font-size: larger;">' +
                '{{ description }}' +
                '</p>' +

                // description

                '<hr size="4" class="mx-auto my-2 rounded-pill" style="width: 40%; opacity: 1;">' +


                '<h2 class="fw-bolder">{{ field_company_profile }}</h2>' +

                // Company name

                '<div class="row w-100 p-0 ps-1 mx-0 justify-content-around d-flex d-sm-flex d-md-none d-lg-none d-xl-none d-xxl-none">\n' +
                    '<div class="col-4 p-0 text-start"><h5 class="fw-bolder">{{ field_company_name }}: </h5></div>\n' +
                    '<div class="col-7 ms-1 p-0 ps-4 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ company_name }}</p></div>\n' +
                '</div>' +

                // Company name

                // Location

                '<div class="row w-100 p-0 ps-1 mx-0 justify-content-around d-flex d-sm-flex d-md-none d-lg-none d-xl-none d-xxl-none">\n' +
                    '<div class="col-4 p-0 text-start"><h5 class="fw-bolder">{{ field_location }}: </h5></div>\n' +
                    '<div class="col-7 ms-1 p-0 ps-4 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ location_text }}</p></div>\n' +
                '</div>' +

                // Location

                // Establishment

                '<div class="row w-100 p-0 ps-1 mx-0 justify-content-around d-flex d-sm-flex d-md-none d-lg-none d-xl-none d-xxl-none">\n' +
                    '<div class="col-4 p-0 m-0 text-start"><h5 class="fw-bolder">{{ field_establishment }}: </h5></div>\n' +
                    '<div class="col-7 ms-1 p-0 ps-4 m-0 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ establishment }}</p></div>\n' +
                '</div>' +

                // Establishment

                // Employee

                '<div class="row w-100 p-0 ps-1 mx-0 justify-content-around d-flex d-sm-flex d-md-none d-lg-none d-xl-none d-xxl-none">\n' +
                    '<div class="col-4 p-0 text-start"><h5 class="fw-bolder">{{ field_employee }}: </h5></div>\n' +
                    '<div class="col-7 ms-1 p-0 ps-4 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ employee }}</p></div>\n' +
                '</div>' +

                // Employee

                // CEO

                '<div class="row w-100 p-0 ps-1 mx-0 justify-content-around d-flex d-sm-flex d-md-none d-lg-none d-xl-none d-xxl-none">\n' +
                    '<div class="col-4 p-0 text-start"><h5 class="fw-bolder">{{ field_ceo }}: </h5></div>\n' +
                    '<div class="col-7 ms-1 p-0 ps-4 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ ceo }}</p></div>\n' +
                '</div>' +

                // CEO

                // Director

                '<div class="row w-100 p-0 ps-1 mx-0 justify-content-around d-flex d-sm-flex d-md-none d-lg-none d-xl-none d-xxl-none">\n' +
                    '<div class="col-4 p-0 text-start"><h5 class="fw-bolder">{{ field_director }}: </h5></div>\n' +
                    '<div class="col-7 ms-1 p-0 ps-4 text-start"><p class="m-0" style="font-weight: 400; font-size: larger;">{{ director }}</p></div>\n' +
                '</div>' +

                // Director

                '<hr size="4" class="mx-auto my-2 mb-4 rounded-pill" style="width: 40%; opacity: 1;">' +

            '</div>' +

        '</div>' +
    '</div>',

    data() {
        return {
            description: '',
            company_name: '',
            location_text: '',
            establishment: '',
            employee: '',
            ceo: '',
            director: '',
            field_company_profile: '',
            field_company_name: '',
            field_location: '',
            field_establishment: '',
            field_employee: '',
            field_ceo: '',
            field_director: '',
        }
    },

    created() {
        this.fetchData();
    },

    mounted() {

    },

    methods: {
        scrollToTop() {
            const container = this.$el.querySelector("#container");
            container.scrollTop = -container.scrollHeight;
        },

        hasHistory () { return window.history.length > 2 },

        fetchData() {
            fetch('api/about')
                .then(res => res.json())
                .then(res => {
                    console.log(res.data);
                    this.description = res.fields.about_description_en;
                    this.company_name = res.fields.company_name_en;
                    this.location_text = res.fields.location_text_en;
                    this.establishment = res.fields.establishment_en;
                    this.employee = res.fields.employee_en;
                    this.ceo = res.fields.ceo_en;
                    this.director = res.fields.director_en;
                    this.field_company_profile = res.fields.field_company_profile_en;
                    this.field_company_name = res.fields.field_company_name_en;
                    this.field_location = res.fields.field_about_location_en;
                    this.field_establishment = res.fields.field_establishment_en;
                    this.field_employee = res.fields.field_employee_en;
                    this.field_ceo = res.fields.field_ceo_en;
                    this.field_director = res.fields.field_director_en;
                })
        }
    }

}
