<template>
  <step-page-wrapper
    headerText="完了まであと少し！<br>希望する働き方について教えて下さい"
    step="2"
    :progress="50"
    @back="back"
  >
    <div class="form-wrapper" ref="formWrapper">
      <div class="weekly-worktime-form">
        <div class="weekly-worktime-form__heading">１週間あたり</div>
        <select
          v-model="selectedWeeklyWorkTimeValue"
          name="weekly_worktime"
          class="weekly-worktime-form__select"
        >
          <option :value="null"></option>
          <option
            v-for="n in 7"
            :value="n"
            :key="`weekly-worktime-form__select_${n}`"
          >{{ n }}日 の稼働</option>
        </select>
      </div>

      <div class="area-form">
        <div class="area-form__heading">希望エリア</div>
        <select
          v-model="selectedAreaValue"
          name="area_id"
          class="area-form__select"
        >
          <option
            v-for="(area, i) in areas"
            :value="area.value"
            :key="`area-form__select_${i}`"
            :disabled="area.disabled"
          >{{ area.name }}</option>
        </select>
      </div>

      <div class="checkbox-form">
        <input
          v-model="checkedCanWorkHoliday"
          type="checkbox"
          id="can_work_holiday"
          name="can_work_holiday"
          class="checkbox-form__input"
          value="1"
        >
        <label for="can_work_holiday">休日稼働可能</label>
      </div>

      <div class="checkbox-form">
        <input
          v-model="checkedCanWorkWeekday"
          type="checkbox"
          id="can_work_weekday"
          name="can_work_weekday"
          class="checkbox-form__input" value="1"
        >
        <label for="can_work_weekday">平日夜稼働可能</label>
      </div>

      <div class="checkbox-form">
        <input
          v-model="checkedHopeAdjustWorktime"
          type="checkbox"
          id="hope_adjust_worktime"
          name="can_adjust"
          class="checkbox-form__input"
          value="1"
        >
        <label for="hope_adjust_worktime">企業や案件に合わせて調整したい</label>
      </div>
      
      <div class="checkbox-form">
        <input
          v-model="checkedIsConsideringChangeJob"
          type="checkbox"
          id="is_considering_change_job"
          name="is_considering_change_job"
          class="checkbox-form__input"
          value="1"
        >
        <label for="is_considering_change_job">転職も検討している</label>
      </div>
    </div>

    <main-btn class="next-btn" label="次へ" :disabled="isDisabledBtn" @click="moveNext" />

    <div class="skip-link">
      <a href="javascript:void(0)" @click.prevent="skip">スキップ</a>
    </div>

    <p class="small-text" ref="smallText">次でラスト！</p>
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
    areas: { type: Array, required: true }
  },
  data () {
    return {
      selectedWeeklyWorkTimeValue: null,
      selectedAreaValue: '',
      checkedCanWorkHoliday: false,
      checkedCanWorkWeekday: false,
      checkedHopeAdjustWorktime: false,
      checkedIsConsideringChangeJob: false,
      observer: null
    }
  },
  computed: {
    isDisabledBtn () {
      return !this.selectedWeeklyWorkTimeValue
        && !this.selectedAreaValue
        && !this.checkedCanWorkHoliday
        && !this.checkedCanWorkWeekday
        && !this.checkedHopeAdjustWorktime
        && !this.checkedIsConsideringChangeJob
    }
  },
  methods: {
    back () {
      this.$emit('back')
    },
    moveNext () {
      this.$emit('moveNext')
    },
    skip () {
      this.resetValue()
      this.$emit('moveNext')
    },
    resetValue () {
      this.selectedWeeklyWorkTimeValue = null
      this.selectedAreaValue = ''
      this.checkedCanWorkHoliday = false
      this.checkedCanWorkWeekday = false
      this.checkedHopeAdjustWorktime = false
      this.checkedIsConsideringChangeJob = false
    }
  },
  beforeDestroy () {
    this.observer.disconnect(this.$refs.formWrapper)
  }
}
</script>

<style lang="scss" scoped>
.form-wrapper {
  margin: 15px 13% 0 10%;
  .weekly-worktime-form {
    display: flex;
    &__heading {
      flex-basis: 35%;
      margin: auto auto auto -6px;
      font-size: 0.9rem;
      color: grey;
    }
    &__select {
      flex-basis: 65%;
      display: block;
      width: 100%;
      border-bottom: solid 1px;
      font-size: 1.2em;
      padding-bottom: 5px;
      margin-right: -14px;
      cursor: pointer;
    }
    &::after {
      content: "";
      box-sizing: border-box;
      width: 4px;
      height: 4px;
      border: 4px solid transparent;
      border-top: 4px solid black;
      pointer-events: none;
      margin-top: 18px;
    }
  }
  .area-form {
    display: flex;
    margin: 17px 0 38px 0;
    &__heading {
      flex-basis: 35%;
      margin: auto auto auto -4px;
      font-size: 0.9rem;
      color: grey;
    }
    &__select {
      flex-basis: 65%;
      display: block;
      width: 100%;
      border-bottom: solid 1px;
      font-size: 1.2em;
      padding-bottom: 5px;
      margin-right: -14px;
      cursor: pointer;
    }
    &::after {
      content: "";
      width: 10px;
      height: 10px;
      border-bottom: solid 2px #b4b3b3;
      border-right: solid 2px #b4b3b3;
      transform: rotate(-45deg);
      pointer-events: none;
      margin-top: 12px;
    }
  }
  .checkbox-form {
    font-size: 0.8rem;
    margin-top: 20px;
    &__input {
      display: none;
      &+label {
        display: none;
        cursor: pointer;
        display: inline-block;
        position: relative;
        padding-left: 30px;
        padding-right: 10px;
        &::before {
          content: "";
          position: absolute;
          display: block;
          box-sizing: border-box;
          width: 20px;
          height: 20px;
          margin-top: -10px;
          margin-right: 3px;
          left: 0;
          top: 50%;
          border: 1px solid;
          border-color: gray;
          border-radius: 25%;
        }
      }
      &:checked+label::before {
        background-color: gray;
      }
      &:checked+label::after {
        content: "";
        position: absolute;
        display: block;
        box-sizing: border-box;
        width: 11px;
        height: 5px;
        margin-top: -3px;
        top: 50%;
        left: 5px;
        transform: rotate(-45deg);
        border-bottom: 2px solid;
        border-left: 2px solid;
        border-color: #FFF;
      }
    }
  }
}
.next-btn {
  display: block;
  margin: 30px auto 0 auto;
}
.skip-link {
  text-align: center;
  margin-top: 20px;
  font-size: 0.9rem;
  a {
    text-decoration: none;
    color: grey;
  }
}
.small-text {
  font-size: 0.8rem;
  text-align: center;
  margin-top: 3rem;
}
</style>
