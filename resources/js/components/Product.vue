<template>
    <section>

        <div class="section-pagetop ">
            <h2 class="title-page">New In</h2>
        </div>
        <div class="section-content bg padding-y">
            <div class="container">
                <div class = "col-12 d-flex">
                    <div class = "col-3">

                        <div>

                            <label for="sort">Դասակարգել ըստ՝</label>
                            <select name="sort" id="sort">
                                <option value="recommended">Առաջարկվող</option>
                                <option value="low-to-high">Արժեքը՝ ցածրից բարձր</option>
                                <option value="high-to-low">Արժեքը՝ բարձրից ցածր</option>
                            </select>

                            <label for="price">Цена:</label>
                            <input type="range"  min = "500" max = "1000" name="price" id="price">

                            <VueSimpleRangeSlider
                                style="width: 300px"
                                :min="0"
                                :max="1000000"
                                exponential
                                v-model="state.range"
                            >
                                <template #prefix="{ value }">$</template>
                            </VueSimpleRangeSlider>

                            <label for="metal">Метал:</label>
                            <select name="metal" id="metal">
                                <option value="silver">Серебро</option>
                                <option value="gold">Золото</option>
                            </select>

                            <label for="metal-color">Цвет метала:</label>
                            <select name="metal-color" id="metal-color">
                                <option value="silver">Серебристый</option>
                                <option value="gold">Золотой</option>
                            </select>

                            <label for="gemstone">Камень:</label>
                            <select name="gemstone" id="gemstone">
                                <option value="zircon">Циркон</option>
                                <option value="lapis">Лазули</option>
                            </select>

                            <label for="gemstone-color">Цвет:</label>
                            <select name="gemstone-color" id="gemstone-color">
                                <option value="blue">Синий</option>
                                <option value="green">Зеленый</option>
                            </select>

                            <div @click="loadAttributes('dd')">{{ currentValue }}</div>
                        </div>

                    </div>
                    <div class = "col-9">
                        <div>

                            <div id="code_prod_complex">
                                <div class="row" >
                                    <div class="col-md-4 picture-item " v-for='(product, index) in attribute' :key='index' >
                                        <a class="card card-product p-4" :href='"/product/"+product.slug'>
                                            <template v-if = "product.images">
                                                <div class="img-wrap padding-y" v-if=""><img :src='"/storage/"+product.images.first()'></div>
                                            </template>
                                            <template v-else>

                                                <div class="img-wrap padding-y"><img src="/frontend/img/slider4.jpg" :alt=product.name></div>
                                            </template>
                                            <div class="">
                                                <div class="title h7" ><a :href='"/product/"+product.slug'>{{ product.name }}</a></div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <span class = "weight p-1">{{ product.weight }}g</span>
                                            </div>
                                            <hr>
                                            <div class="text-center">
                                                <template v-if="product.special_price != 0">
                                                    <div class="price-wrap" style = "font-size:12px;">
                                                        <span style="color: #c66" class="price" > {{ product.special_price}} </span>
                                                        <del class="price-old"> {{ product.price}}</del>
                                                    </div>
                                                </template>
                                                <template v-else>
                                                    <div class="price-wrap h5">
                                                        <span style="color: #c66" class="price"> {{ product.price}} </span>
                                                    </div>
                                                </template>
                                                <a :href='"/product/"+product.slug' style="background-color: #c66; border : #c66" class="btn btn-sm  btn btn-dark mt-2"><i class="fa fa-cart-arrow-down"></i> Buy now</a>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</template>

<script>
import VueSimpleRangeSlider from "vue-simple-range-slider/vue2";
import "vue-simple-range-slider/vue2/css";
export default {
    name: "product",
    components: { VueSimpleRangeSlider },
    data() {
        return {
            productAttributes: [],
            attribute: {},
            attributes: [],
            attributeSelected: false,
            attributeValues: [],
            value: {},
            valueSelected: false,
            currentAttributeId: '',
            currentValue: '555',
            currentQty: '',
            currentPrice: '',
        }
    },

    /**
     * lifecycle hook of VueJS
     * load all the product attributes for our current product.
     */

    created: function() {
        console.log(555);
        this.loadAttributes()
    },
    mounted() {
    },
    methods: {
        avab(params){
            console.log(params,"ddddddddddddd")
        },
        loadAttributes() {
            console.log(555)
            let self = this;
            axios.get('/product/new/filter').then (function(response){
            self.attribute = response.data
                console.log(response.data)
            });
        },

    }
}
</script>
