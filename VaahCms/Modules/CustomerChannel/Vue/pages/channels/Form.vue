<script setup>
import {onMounted,ref, watchEffect} from "vue";
import {useChannelStore} from '../../stores/store-channels'

import VhField from './../../vaahvue/vue-three/primeflex/VhField.vue'
import {useRoute} from 'vue-router';
const store = useChannelStore();
const route = useRoute();

onMounted(async () => {
    if (route.params && route.params.id) {
        await store.getItem(route.params.id);
    }

    await store.getFormMenu();
    await store.getName();

});

watchEffect(()=>{
    store.setCustomerId(route);
})


//--------form_menu
const form_menu = ref();
const toggleFormMenu = (event) => {
    form_menu.value.toggle(event);
};
//--------/form_menu

</script>
<template>

    <div class="col-6">

        <Panel class="is-small">

            <template class="p-1" #header>


                <div class="flex flex-row">
                    <div class="p-panel-title">
                        <span v-if="store.item && store.item.id">
                            Update
                        </span>
                        <span v-else>
                            Create
                        </span>
                    </div>

                </div>


            </template>

            <template #icons>


                <div class="p-inputgroup">

                    <Button class="p-button-sm"
                            v-if="store.item && store.item.id"
                            data-testid="channels-view_item"
                            @click="store.toView(store.item)"
                            icon="pi pi-eye"/>

                    <Button label="Save"
                            class="p-button-sm"
                            v-if="store.item && store.item.id"
                            data-testid="channels-save"
                            @click="store.itemAction('save')"
                            icon="pi pi-save"/>

                    <Button label="Create & New"
                            v-else
                            @click="store.itemAction('create-and-new')"
                            class="p-button-sm"
                            data-testid="channels-create-and-new"
                            icon="pi pi-save"/>


                    <!--form_menu-->
                    <Button
                        type="button"
                        @click="toggleFormMenu"
                        class="p-button-sm"
                        data-testid="channels-form-menu"
                        icon="pi pi-angle-down"
                        aria-haspopup="true"/>

                    <Menu ref="form_menu"
                          :model="store.form_menu_list"
                          :popup="true"/>
                    <!--/form_menu-->


                    <Button class="p-button-primary p-button-sm"
                            icon="pi pi-times"
                            data-testid="channels-to-list"
                            @click="store.toList()">
                    </Button>
                </div>


            </template>


            <div v-if="store.item" class="mt-2">

                <Message severity="error"
                         class="p-container-message mb-3"
                         :closable="false"
                         icon="pi pi-trash"
                         v-if="store.item.deleted_at">

                    <div class="flex align-items-center justify-content-between">

                        <div class="">
                            Deleted {{store.item.deleted_at}}
                        </div>

                        <div class="ml-3">
                            <Button label="Restore"
                                    class="p-button-sm"
                                    data-testid="articles-item-restore"
                                    @click="store.itemAction('restore')">
                            </Button>
                        </div>

                    </div>

                </Message>


                <VhField label="Name">
                    <InputText class="w-full"
                               name="channels-name"
                               data-testid="channels-name"
                               placeholder="Enter Name"
                               @update:modelValue="store.watchItem"
                               v-model="store.item.name"/>
                </VhField>

                <VhField label="Slug">
                    <InputText class="w-full"
                               name="channels-slug"
                               placeholder="Slug"
                               data-testid="channels-slug"
                               v-model="store.item.slug"/>
                </VhField>
                <VhField label="Customer Name">
                    <AutoComplete name="test-runs-project"
                                  class="w-full"
                                  data-testid="channel-customer_id"
                                  v-model="store.item.customers"
                                  option-label = "name"
                                  dropdown
                                  :suggestions="store.filtered_customers"
                                  @complete="store.search"
                                  @change="store.handleCustomerSelect"
                    />
                </VhField>
                <VhField label="Select Locale">
                    <Dropdown
                        placeholder="Select Locale"
                        :options="store.assets.locale"
                        v-model="store.item.locale_id"
                        option-label="name"
                        option-value="id"
                        class="w-full"
                    />
                </VhField>
                <VhField label="Select Currency">
                    <Dropdown
                        placeholder="Select Currency"
                        :options="store.assets.currency"
                        v-model="store.item.currency_id"
                        option-label="name"
                        option-value="id"
                        class="w-full"
                    />
                </VhField>

                <VhField label="Store URl">
                    <InputText
                        placeholder="Enter Store url"
                        autocomplete="off"
                        class="w-full"
                        v-model="store.item.url"
                    />
                </VhField>

                <VhField label="Select Type">
                    <Dropdown
                        placeholder="Select Type"
                        :options="store.assets.type"
                        v-model="store.item.type_id"
                        option-label="name"
                        option-value="id"
                        class="w-full"
                    />
                </VhField>

                <VhField label="Confirmation">
                    <InputSwitch v-bind:false-value="0"
                                 v-bind:true-value="1"
                                 class="p-inputswitch-sm mx-3"
                                 name="channels-confirmation"
                                 data-testid="channels-confirmation"
                                 v-model="store.item.confirmation"/>
                </VhField>

                <VhField label="Is Active">
                    <InputSwitch v-bind:false-value="0"
                                 v-bind:true-value="1"
                                 class="p-inputswitch-sm mx-3"
                                 name="channels-active"
                                 data-testid="channels-active"
                                 v-model="store.item.is_active"/>
                </VhField>

            </div>
        </Panel>

    </div>

</template>
