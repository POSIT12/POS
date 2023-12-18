<template>
    <b-form class="customform mb-2">
        <div class="row customerform">
            <div class="col-md-12 mt-2">
                <div class="form-group">
                    <label>Inventory Manager: <span v-if="form.errors" v-text="form.errors.is_active" class="haveerror"></span></label>
                    <multiselect v-model="role" id="ajax" label="name" track-by="id"
                        placeholder="Select Status" open-direction="bottom" :options="roles"
                        :allow-empty="false" multiple="true"
                        :show-labels="false">
                    </multiselect> 
                </div>
            </div>

        </div>
    </b-form>
</template>

<script>
import Multiselect from '@suadelabs/vue3-multiselect';
export default {
    components: { Multiselect },
    props: ['dropdowns'],
    data(){
        return {
            role: '',
            form: {}
        }
    },
    computed: {
        roles : function() {
            return this.dropdowns.filter(x => x.type == 'Menu');
        },
    }
}
</script>
<style scoped>
.multiselect__tags {
  font-size: 10px;
}
</style>