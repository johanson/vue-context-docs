Explore the basics of the context menu through this basic usage demo.

@component('components.tip')
    Right click on each item to open the context menu.
@endcomponent

<basic-usage></basic-usage>

@component('components.tip')
    Try using the up and down arrows as well to navigate the menu.
@endcomponent

@component('components.code')
<template>
    <div>
        <div class="bg-white shadow overflow-hidden sm:rounded-md">
            <ul>
                <li>
                    <a href="#"
                       class="block hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out"
                       :class="{ 'border-t border-gray-200': index > 0 }"
                       v-for="(item, index) in items"
                       :key="index"
                       @contextmenu.prevent="$refs.menu.open"
                    >
                        <div class="flex items-center px-4 py-4 sm:px-6"
                             :class="{ 'pt-0': index === 0, 'pb-0': index + 1 === items.length }"
                        >
                            <div class="min-w-0 flex-1 md:grid md:grid-cols-2 md:gap-4">
                                <div class="text-sm leading-5 font-medium text-gray-600 truncate" v-text="item"></div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <vue-context ref="menu">
            <li>
                <a @click.prevent="onClick($event.target.innerText)">
                    Do something
                </a>
            </li>
            <li>
                <a @click.prevent="onClick($event.target.innerText)">
                    Do something else
                </a>
            </li>
        </vue-context>
    </div>
</template>

<script>
    import VueContext from 'vue-context';
    import 'vue-context/src/sass/vue-context.scss';

    export default {
        components: { VueContext },

        data () {
            return {
                items: [
                    'Cras justo odio',
                    'Dapibus ac facilisis in',
                    'Morbi leo risus',
                    'Porta ac consectetur ac',
                    'Vestibulum at eros'
                ]
            };
        },

        methods: {
            onClick (text) {
                alert(`You clicked on: "${text}"`);
            }
        }
    };
</script>
@endcomponent
