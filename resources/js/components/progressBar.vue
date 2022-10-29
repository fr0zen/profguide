var ProgressBar = {
name: 'ProgressBar',
props: {
value: {
type: Number,
default: 0
},
barClass: {
type: String,
default: ''
},
origin: {
type: String,
default: 'left'
},
scale: {
type: String,
default: 'X',
validator: v => ['X', 'Y'].includes(v)
}
},
data() {
return {
ready: false
}
},
computed: {
barStyle() {
if (!this.ready) {
return {
transform: `scale${this.scale}(0)`
}
}

return {
transform: `scale${this.scale}(${this.value * 0.01})`,
transformOrigin: `${this.origin}`
}
}
},
mounted() {
setTimeout(() => { this.ready = true }, 0)
},
template: `
<div
    class="progressbar"
>
<div
    :class="barClass"
    :style="barStyle"
    class="progressbar-bar"
>
    <slot/>
</div>
</div>
`
};

// Vue Instance
new Vue({
el: "#app",
components: {
"progress-bar": ProgressBar
},
data: function() {
return {
heading: "Vue.js Progress Bar Component Example"
}
}
});
