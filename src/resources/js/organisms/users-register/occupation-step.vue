<template>
  <step-page-wrapper
    headerText="今の職種を選択してください"
    headerSubText="複数選択可能"
    step="1"
    :progress="30"
    @back="back"
  >
    <div class="form-wrapper" ref="formWrapper">
      <template v-for="(occupation, i) in occupations">
        <div
          v-if="occupation.img"
          :key="`occupation-form_${i}`"
          class="occupation-form"
          :class="{ 'occupation-form--selected': selectedValues.includes(occupation.value) }"
          @click="onClickOccupation(occupation.value)"
        >
          <img :src="occupation.img" :alt="occupation.name" class="occupation-form__img">
          <p class="occupation-form__text">{{ occupation.name }}</p>
        </div>
      </template>

      <input type="hidden" name="occupation_ids" :value="selectedValues">
    </div>

    <main-btn
      class="next-btn"
      label="次へ"
      :disabled="!selectedValues.length"
      @click="moveNext"
    ></main-btn>

    <p class="small-text" ref="smallText">あと３ステップ！</p>
  </step-page-wrapper>
</template>

<script>
import ResizeObserver from 'resize-observer-polyfill'
import stepPageWrapper from '../../molecules/users-register/step-page-wrapper'
import mainBtn from '../../atoms/main-btn'

export default {
  components: {
    stepPageWrapper,
    mainBtn
  },
  props: {
    occupations: { type: Array, required: true }
  },
  data () {
    return {
      selectedValues: [],
      observer: null
    }
  },
  methods: {
    back () {
      this.$emit('back')
    },
    onClickOccupation (value) {
      if (!this.selectedValues.includes(value)) {
        this.selectedValues.push(value)
      } else {
        this.selectedValues = this.selectedValues.filter(selectedValue => selectedValue !== value)
      }
    },
    moveNext () {
      this.$emit('moveNext')
    }
  },
  beforeDestroy () {
    this.observer.disconnect(this.$refs.formWrapper)
  }
}
</script>

<style lang="scss" scoped>
.form-wrapper {
  display: flex;
  justify-content: center;
  text-align: center;
  margin-top: 45px;
  padding: 0 10%;
  .occupation-form {
    &__img {
      max-width: 50%;
      margin: auto;
      border: solid 2px lightgrey;
      cursor: pointer;
    }
    &--selected .occupation-form__img {
      border: solid 2px red;
    }
    &__text {
      font-size: 0.8rem;
      margin-top: 10px;
    }
  }
}
.next-btn {
  display: block;
  margin: 32px auto 0 auto;
}
.small-text {
  font-size: 0.8rem;
  margin-top: 3rem;
  text-align: center;
}
</style>
