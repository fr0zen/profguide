<template>
    <transition name="modal">
        <div class="modal-mask">
            <div class="modal-wrapper">
                <div class="modal-container">

                    <div class="modal-header">
                        <slot name="header">
                            default header
                        </slot>
                    </div>

                    <div class="modal-body">
                        <slot name="body">

                        </slot>
                    </div>

                    <div class="modal-footer" v-if="hasFooterSlot">
                        <slot name="footer">
                            <button class="button modal-default-button" @click="$emit('close')">
                                <span class="button_text">
                                    <slot name="button">
                                        OK
                                    </slot>
                                </span>
                            </button>
                        </slot>
                    </div>

                    <slot name="back">
                    </slot>
                </div>
            </div>
        </div>
    </transition>
</template>

<script>
export default {
    name: "modal",

    computed: {

        hasFooterSlot() {
            return !!this.$slots.footer
        }
    }
}
</script>

<style scoped>

</style>
