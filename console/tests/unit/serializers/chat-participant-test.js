import { module, test } from 'qunit';
import { setupTest } from '@fleetbase/console/tests/helpers';

module('Unit | Serializer | chat-participant', function (hooks) {
    setupTest(hooks);

    test('serialize keeps scalar attributes', function (assert) {
        const store = this.owner.lookup('service:store');
        const json = store.createRecord('chat-participant', { name: 'Karl', email: 'karl@hostoscollective.com' }).serialize();

        assert.strictEqual(json.name, 'Karl');
        assert.strictEqual(json.email, 'karl@hostoscollective.com');
    });
});
